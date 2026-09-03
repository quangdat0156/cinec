<?php
/**
 * CiNEC High-Performance Image Optimization & Upload Engine
 * Converts any image format (JPG, PNG, GIF, BMP, HEIC, AVIF) to modern WebP
 * Applies intelligent resizing, compression, and EXIF orientation auto-correction
 */

if (!defined('CINEC_UPLOAD_DIR')) {
    define('CINEC_UPLOAD_DIR', dirname(__DIR__) . '/uploads');
}

/**
 * Xử lý tải lên và tối ưu hóa ảnh tự động
 *
 * @param array $file $_FILES['image']
 * @param string $subfolder Thư mục con (news, events, partners, team, settings)
 * @param int $maxWidth Chiều rộng tối đa (px)
 * @param int $quality Chất lượng nén WebP (0-100, khuyên dùng 80-85)
 * @return string|false Đường dẫn tương đối của ảnh đã tối ưu (hoặc false nếu thất bại)
 */
function upload_and_optimize_image($file, $subfolder = 'general', $maxWidth = 1400, $quality = 82) {
    if (empty($file) || !isset($file['tmp_name']) || empty($file['tmp_name']) || $file['error'] !== UPLOAD_ERR_OK) {
        return false;
    }

    $tmpPath = $file['tmp_name'];
    $originalName = $file['name'];
    $fileExt = strtolower(pathinfo($originalName, PATHINFO_EXTENSION));

    // Thư mục lưu trữ đích
    $targetDir = CINEC_UPLOAD_DIR . '/' . trim($subfolder, '/');
    if (!is_dir($targetDir)) {
        @mkdir($targetDir, 0755, true);
    }

    // Tên file ngẫu nhiên an toàn, duy nhất
    $fileSlug = preg_replace('/[^a-zA-Z0-9_-]/', '', pathinfo($originalName, PATHINFO_FILENAME));
    $fileSlug = substr($fileSlug, 0, 20) ?: 'img';
    $uniqueName = $fileSlug . '_' . time() . '_' . substr(md5(uniqid()), 0, 6);

    // Xử lý riêng cho file SVG
    if ($fileExt === 'svg') {
        $targetPath = $targetDir . '/' . $uniqueName . '.svg';
        if (move_uploaded_file($tmpPath, $targetPath)) {
            return 'uploads/' . trim($subfolder, '/') . '/' . $uniqueName . '.svg';
        }
        return false;
    }

    // Kiểm tra định dạng ảnh hợp lệ
    $imageInfo = @getimagesize($tmpPath);
    if (!$imageInfo) {
        return false;
    }

    $origWidth = $imageInfo[0];
    $origHeight = $imageInfo[1];
    $mimeType = $imageInfo['mime'] ?? '';

    // Nếu server hỗ trợ GD và imagewebp
    if (function_exists('gd_info') && function_exists('imagewebp')) {
        $sourceImage = null;

        // Đọc ảnh nguồn theo MIME type
        switch ($mimeType) {
            case 'image/jpeg':
            case 'image/jpg':
                $sourceImage = @imagecreatefromjpeg($tmpPath);
                // Xử lý tự xoay hướng ảnh EXIF từ điện thoại di động
                if ($sourceImage && function_exists('exif_read_data')) {
                    try {
                        $exif = @exif_read_data($tmpPath);
                        if (!empty($exif['Orientation'])) {
                            switch ($exif['Orientation']) {
                                case 3:
                                    $sourceImage = imagerotate($sourceImage, 180, 0);
                                    break;
                                case 6:
                                    $sourceImage = imagerotate($sourceImage, -90, 0);
                                    $tmpW = $origWidth;
                                    $origWidth = $origHeight;
                                    $origHeight = $tmpW;
                                    break;
                                case 8:
                                    $sourceImage = imagerotate($sourceImage, 90, 0);
                                    $tmpW = $origWidth;
                                    $origWidth = $origHeight;
                                    $origHeight = $tmpW;
                                    break;
                            }
                        }
                    } catch (Exception $e) {}
                }
                break;
            case 'image/png':
                $sourceImage = @imagecreatefrompng($tmpPath);
                break;
            case 'image/webp':
                $sourceImage = @imagecreatefromwebp($tmpPath);
                break;
            case 'image/gif':
                $sourceImage = @imagecreatefromgif($tmpPath);
                break;
            case 'image/bmp':
            case 'image/x-ms-bmp':
                if (function_exists('imagecreatefrombmp')) {
                    $sourceImage = @imagecreatefrombmp($tmpPath);
                }
                break;
            default:
                // Thử đọc qua string stream
                $fileContent = @file_get_contents($tmpPath);
                if ($fileContent) {
                    $sourceImage = @imagecreatefromstring($fileContent);
                }
                break;
        }

        if ($sourceImage) {
            // Tính toán kích thước thu nhỏ tỷ lệ
            $newWidth = $origWidth;
            $newHeight = $origHeight;

            if ($origWidth > $maxWidth) {
                $newWidth = $maxWidth;
                $newHeight = (int)round(($origHeight / $origWidth) * $maxWidth);
            }

            // Tạo khung canvas mới
            $targetImage = imagecreatetruecolor($newWidth, $newHeight);

            // Bảo toàn độ trong suốt (Alpha Transparency)
            imagealphablending($targetImage, false);
            imagesavealpha($targetImage, true);
            $transparent = imagecolorallocatealpha($targetImage, 255, 255, 255, 127);
            imagefilledrectangle($targetImage, 0, 0, $newWidth, $newHeight, $transparent);

            // Tái lấy mẫu chất lượng cao (Resampling)
            imagecopyresampled($targetImage, $sourceImage, 0, 0, 0, 0, $newWidth, $newHeight, $origWidth, $origHeight);

            // Xuất file WebP nén siêu nhẹ
            $targetPath = $targetDir . '/' . $uniqueName . '.webp';
            $success = imagewebp($targetImage, $targetPath, $quality);

            // Giải phóng bộ nhớ RAM
            imagedestroy($sourceImage);
            imagedestroy($targetImage);

            if ($success && file_exists($targetPath)) {
                return 'uploads/' . trim($subfolder, '/') . '/' . $uniqueName . '.webp';
            }
        }
    }

    // Phương án dự phòng nếu GD không chạy: Lưu file gốc an toàn
    $targetPath = $targetDir . '/' . $uniqueName . '.' . $fileExt;
    if (move_uploaded_file($tmpPath, $targetPath)) {
        return 'uploads/' . trim($subfolder, '/') . '/' . $uniqueName . '.' . $fileExt;
    }

    return false;
}

/**
 * Xử lý ảnh dạng Base64 (Data URI) từ trình soạn thảo hoặc Drag & Drop
 */
function save_base64_image($base64Data, $subfolder = 'general', $maxWidth = 1400, $quality = 82) {
    if (empty($base64Data) || strpos($base64Data, 'data:image/') !== 0) {
        return false;
    }

    $parts = explode(',', $base64Data);
    if (count($parts) < 2) return false;

    $meta = $parts[0];
    $data = base64_decode($parts[1]);
    if (!$data) return false;

    $targetDir = CINEC_UPLOAD_DIR . '/' . trim($subfolder, '/');
    if (!is_dir($targetDir)) {
        @mkdir($targetDir, 0755, true);
    }

    $uniqueName = 'img_' . time() . '_' . substr(md5(uniqid()), 0, 6);

    if (function_exists('gd_info') && function_exists('imagewebp')) {
        $sourceImage = @imagecreatefromstring($data);
        if ($sourceImage) {
            $origWidth = imagesx($sourceImage);
            $origHeight = imagesy($sourceImage);

            $newWidth = $origWidth;
            $newHeight = $origHeight;

            if ($origWidth > $maxWidth) {
                $newWidth = $maxWidth;
                $newHeight = (int)round(($origHeight / $origWidth) * $maxWidth);
            }

            $targetImage = imagecreatetruecolor($newWidth, $newHeight);
            imagealphablending($targetImage, false);
            imagesavealpha($targetImage, true);

            imagecopyresampled($targetImage, $sourceImage, 0, 0, 0, 0, $newWidth, $newHeight, $origWidth, $origHeight);

            $targetPath = $targetDir . '/' . $uniqueName . '.webp';
            $success = imagewebp($targetImage, $targetPath, $quality);

            imagedestroy($sourceImage);
            imagedestroy($targetImage);

            if ($success && file_exists($targetPath)) {
                return 'uploads/' . trim($subfolder, '/') . '/' . $uniqueName . '.webp';
            }
        }
    }

    // Fallback lưu JPG
    $targetPath = $targetDir . '/' . $uniqueName . '.jpg';
    if (@file_put_contents($targetPath, $data)) {
        return 'uploads/' . trim($subfolder, '/') . '/' . $uniqueName . '.jpg';
    }

    return false;
}
