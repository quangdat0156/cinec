<?php
require_once 'config/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $mentor_name = trim($_POST['mentor_name'] ?? 'CiNEC chỉ định Mentor phù hợp');
    $fullname = trim($_POST['fullname'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $organization = trim($_POST['organization'] ?? 'Cá nhân / Dự án');
    $meeting_type = $_POST['meeting_type'] ?? 'office';
    $custom_location_detail = trim($_POST['custom_location_detail'] ?? '');
    $preferred_date = trim($_POST['preferred_date'] ?? date('d/m/Y', strtotime('+2 days')));
    $preferred_time = trim($_POST['preferred_time'] ?? '08:30 - 10:00 (Sáng)');
    $message = trim($_POST['message'] ?? '');
    $redirect_url = $_POST['redirect_url'] ?? 'gioi-thieu.php';

    // Xây dựng nhãn hình thức gặp
    $meetingLabel = '🏢 Gặp tại văn phòng CiNEC';
    if ($meeting_type === 'custom_location') {
        $meetingLabel = '📍 Địa điểm khác: ' . ($custom_location_detail ?: 'Đề xuất qua điện thoại');
    } elseif ($meeting_type === 'online') {
        $meetingLabel = '💻 Online (Google Meet / Zoom)';
    }

    if (!empty($fullname) && !empty($phone)) {
        $contactData = [
            'fullname' => $fullname,
            'email' => $email,
            'phone' => $phone,
            'organization' => $organization,
            'program_interest' => 'Đặt lịch hẹn Mentor: ' . $mentor_name,
            'message' => "【HÌNH THỨC GẶP】: {$meetingLabel}\n" .
                         "【THỜI GIAN DỰ KIẾN】: {$preferred_date} ({$preferred_time})\n" .
                         "【MENTOR ĐỀ XUẤT】: {$mentor_name}\n" .
                         "【NỘI DUNG TƯ VẤN】: " . ($message ?: 'Tư vấn định hướng khởi nghiệp và chuyển đổi số.'),
            'status' => 'new',
            'meeting_type' => $meeting_type,
            'meeting_label' => $meetingLabel,
            'preferred_date' => $preferred_date,
            'preferred_time' => $preferred_time
        ];

        save_contact($contactData);

        session_start();
        $_SESSION['flash_booking_success'] = "Yêu cầu đặt lịch hẹn với Mentor [{$mentor_name}] đã được gửi thành công! Ban điều phối CiNEC sẽ liên hệ xác nhận lịch trong vòng 24h.";
    }
}

header("Location: " . ($redirect_url ?: 'gioi-thieu.php'));
exit;
