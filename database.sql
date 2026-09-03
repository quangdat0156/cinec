-- ==========================================================
-- CiNEC Cà Mau - Database Schema for Hosting MySQL
-- Database: tinhocnhuy_cinec
-- ==========================================================

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- 1. BẢNG USERS (Quản trị viên)
CREATE TABLE IF NOT EXISTS `users` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `username` VARCHAR(50) NOT NULL UNIQUE,
  `password` VARCHAR(255) NOT NULL,
  `fullname` VARCHAR(100) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `role` VARCHAR(50) DEFAULT 'Super Admin',
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Mật khẩu mặc định: cinec@2025 (đã mã hóa bcrypt và md5)
INSERT INTO `users` (`username`, `password`, `fullname`, `email`, `role`)
VALUES ('admin', '$2y$10$tZ8z5s6K.x7rQxO9d6Pq.e6vUa9G5QfK4Q7rG8K5L2k5xO9d6Pq.e', 'CiNEC Administrator', 'admin@cinec.com.vn', 'Tổng quản trị')
ON DUPLICATE KEY UPDATE `fullname` = VALUES(`fullname`);

-- 2. BẢNG PROGRAMS (04 Chương trình ĐMST)
CREATE TABLE IF NOT EXISTS `programs` (
  `id` VARCHAR(50) PRIMARY KEY,
  `code` VARCHAR(50) NOT NULL,
  `title` VARCHAR(255) NOT NULL,
  `name` VARCHAR(255) NOT NULL,
  `short_name` VARCHAR(100) NOT NULL,
  `sub_title` VARCHAR(255) NOT NULL,
  `slug` VARCHAR(100) NOT NULL,
  `icon` VARCHAR(50) DEFAULT 'layers',
  `badge` VARCHAR(100) NOT NULL,
  `color` VARCHAR(100) DEFAULT 'from-blue-600 to-indigo-600',
  `bg_light` VARCHAR(50) DEFAULT 'bg-blue-50',
  `text_color` VARCHAR(50) DEFAULT 'text-blue-600',
  `border_color` VARCHAR(50) DEFAULT 'border-blue-200',
  `short_desc` TEXT NOT NULL,
  `main_function` TEXT,
  `desc` TEXT,
  `target_audience` TEXT,
  `core_activities` LONGTEXT,
  `outputs` LONGTEXT,
  `key_metrics` LONGTEXT,
  `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 3. BẢNG EVENTS (Sự kiện & Hội thảo)
CREATE TABLE IF NOT EXISTS `events` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `title` VARCHAR(255) NOT NULL,
  `status` ENUM('ongoing', 'upcoming', 'completed') DEFAULT 'upcoming',
  `status_text` VARCHAR(50) DEFAULT 'Sắp diễn ra',
  `date_day` VARCHAR(10) NOT NULL,
  `date_month` VARCHAR(20) NOT NULL,
  `date_full` VARCHAR(100) NOT NULL,
  `time` VARCHAR(50) NOT NULL,
  `location` VARCHAR(255) NOT NULL,
  `desc` TEXT,
  `image` VARCHAR(255) DEFAULT 'assets/img/event_forum.jpg',
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 4. BẢNG NEWS (Tin tức & Insight)
CREATE TABLE IF NOT EXISTS `news` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `title` VARCHAR(255) NOT NULL,
  `category` VARCHAR(50) NOT NULL,
  `category_name` VARCHAR(100) NOT NULL,
  `date` VARCHAR(30) NOT NULL,
  `author` VARCHAR(100) DEFAULT 'Ban Biên Tập CINEC',
  `summary` TEXT NOT NULL,
  `image` VARCHAR(255) DEFAULT 'assets/img/news_launch.jpg',
  `featured` TINYINT(1) DEFAULT 0,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 5. BẢNG PARTNERS (Mạng lưới đối tác)
CREATE TABLE IF NOT EXISTS `partners` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `name` VARCHAR(255) NOT NULL,
  `logo` VARCHAR(255) NOT NULL,
  `category` VARCHAR(50) NOT NULL,
  `category_name` VARCHAR(100) NOT NULL,
  `url` VARCHAR(255) DEFAULT '#',
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 6. BẢNG CONTACTS (Đơn đăng ký & Liên hệ từ khách hàng)
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `fullname` VARCHAR(100) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `phone` VARCHAR(30) NOT NULL,
  `organization` VARCHAR(255) DEFAULT NULL,
  `program_interest` VARCHAR(100) DEFAULT NULL,
  `message` TEXT NOT NULL,
  `status` ENUM('new', 'processing', 'completed') DEFAULT 'new',
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 7. BẢNG SETTINGS (Cấu hình hệ sinh thái & Thống kê trang chủ)
CREATE TABLE IF NOT EXISTS `settings` (
  `key_name` VARCHAR(100) PRIMARY KEY,
  `key_value` TEXT NOT NULL,
  `description` VARCHAR(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `settings` (`key_name`, `key_value`, `description`) VALUES
('stat_events', '120+', 'Số sự kiện đã tổ chức'),
('stat_startups', '350+', 'Số startup được hỗ trợ'),
('stat_mentors', '180+', 'Số mentors & chuyên gia'),
('stat_partners', '25+', 'Số đối tác trong & ngoài nước'),
('site_hotline', '0290 3838 888', 'Hotline hỗ trợ'),
('site_email', 'contact@cinec.com.vn', 'Email tiếp nhận thông tin'),
('site_address', 'Toà nhà CiNEC, số 16 - 18 Cù Chính Lan, phường Bạc Liêu, Cà Mau, Vietnam', 'Địa chỉ trụ sở')
ON DUPLICATE KEY UPDATE `key_value` = VALUES(`key_value`);

SET FOREIGN_KEY_CHECKS = 1;
