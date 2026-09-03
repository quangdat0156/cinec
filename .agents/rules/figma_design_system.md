# CiNEC Figma Design System & Component Guidelines

Tài liệu quy chuẩn Design System được trích xuất trực tiếp từ các node Figma gốc:
- **Design Systems:** Node `2:543` (Colors `2:545`, Typography `2:1078`, Icon `2:744`, Spacing `4:1226`, Padding `4:1605`)
- **Logo:** Node `2:1124`
- **Components:** Node `4:1655` (Header Desktop `115:2428`, Mobile `115:2957`, Dropdowns, Buttons, Cards)

---

## 1. Color Palette (Bảng màu chuẩn)
| Tên biến Token | Mã Hex / RGBA | Vai trò & Ứng dụng |
| :--- | :--- | :--- |
| **Primary Color** | `#062AAD` | Màu nhận diện chủ đạo, tiêu đề H1-H5, icon chính, đường viền active |
| **Secondary Color** | `#05A6F5` | Màu phụ trợ, icon nền nhẹ, hover gradient |
| **Accent Color** | `#C1FF72` / `#7BC612` | Màu xanh lime / neon tạo điểm nhấn (Từ khóa Impact, Badge chuyển đổi số) |
| **Dark Blue** | `#02155B` (hoặc `#02185D`) | Nền footer, văn bản tương phản cao |
| **Background** | `#F7FAFD` (hoặc `#FAFCFF`) | Màu nền toàn bộ các trang web |
| **Neutral White** | `#FFFFFF` | Nền các thẻ Card, container, button text |
| **Text Body** | `#5B5B5B` | Màu văn bản nội dung thông thường, đoạn văn |
| **Text Muted** | `#A6A7AA` | Màu chú thích, ngày cập nhật, breadcrumb phụ |
| **Icon Bg Light** | `rgba(5, 166, 245, 0.1)` | Nền hình tròn bọc icon (48x48px) |

---

## 2. Typography Scale (Hệ thống chữ)
- **Primary Font Family:** `Inter, sans-serif` (kết hợp `Plus Jakarta Sans`)
- **Scale:**
  - `H1`: 56px / Line-height 64px / Bold 700 / Letter-spacing -0.02em
  - `H2`: 40px / Line-height 48px / Bold 700 / Letter-spacing -0.02em
  - `H3`: 32px / Line-height 40px / SemiBold 600 / Letter-spacing -0.015em
  - `H4`: 24px / Line-height 32px / SemiBold 600 / Letter-spacing -0.01em
  - `H5`: 20px / Line-height 28px / SemiBold 600
  - `BodyLG`: 16px / Line-height 24px / Regular 400 hoặc SemiBold 600
  - `BodyMD`: 14px / Line-height 20px / Regular 400 hoặc Medium 500
  - `BodySM`: 13px / Line-height 20px / Medium 500
  - `Caption`: 12px (hoặc 11px) / Line-height 16px / Regular 400 hoặc Medium 500

---

## 3. Spacing, Padding & Layout Scale
- **Desktop Container:** Max-width `1440px`, padding ngang `130px` (chuẩn Figma: `px-4 md:px-12 2xl:px-24`).
- **Spacing (Gaps):** `4px`, `8px`, `12px`, `16px`, `24px`, `32px`, `48px`, `50px`.
- **Card Border Radius:**
  - Standard Card: `rounded-2xl` (16px) hoặc `rounded-xl`
  - Hero / Function Large Card: `rounded-[32px]` (32px)
  - Badge / Pill Button: `rounded-full` (30px)
  - Icon Containers: `rounded-full` (hình tròn) hoặc `rounded-lg` (8px/10px)
- **Shadows:**
  - Card tiêu chuẩn: `boxShadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1)` (`shadow-figma-card`)
  - Card nâng cao / Tầm nhìn / Giá trị cốt lõi: `boxShadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.25)` (`shadow-figma-elevate`)
  - Floating Navbar Capsule: `boxShadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.15)` (`shadow-figma-nav`)

---

## 4. Logo Variations (Node 2:1124)
- **Logo bản màu sáng trên nền xanh/navy:** Logo CiNEC màu trắng (`assets/img/logo-cinec-trang.png`).
- **Logo bản màu chính thức trên nền trắng/sáng:** Logo CiNEC phối màu chuẩn (`assets/img/logo-web-cinec.png`).
- Kích thước hiển thị chuẩn trên Navbar: Height 36px - 44px, Width tương ứng tỷ lệ SVG gốc.

---

## 5. Reusable Components (Node 4:1655)
1. **Header Capsule (Navbar):**
   - Kích thước Desktop: Width 1180px, Height 70px, bo góc `16px` hoặc `full`, nền `#FFFFFF`, bóng `shadow-figma-nav`.
   - Nút hành động "Liên hệ": Gradient linear `171deg, #05A6F5 0%, #062AAD 100%`, bo tròn `rounded-full` (30px), chữ trắng kèm icon mũi tên tròn.
2. **Pill Tag / Badge:**
   - Bo góc `rounded-full`, padding `4px 12px`, font Inter Medium 12px.
   - Các biến thể: Xanh neon `#7BC612`, Xanh dương `#05A6F5`, Trắng viền xanh.
3. **Card đồ họa vòm (Arch Card):**
   - Dùng cho Ban lãnh đạo & Nhân sự: Nền thẻ `#FFFFFF`, khung ảnh vòm bán nguyệt `#F3FBFF` với vòm cong cyan `rgba(5, 166, 245, 0.1)`.
4. **Dashboard Metric Card:**
   - Nền trắng, bo góc `16px`, bóng mờ `0 2px 4px rgba(0,0,0,0.1)`, hiển thị biểu đồ và ngày cập nhật số liệu.
