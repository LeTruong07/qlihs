# Hệ Thống Quản Lý Sinh Viên

[![Laravel Version](https://img.shields.io/badge/Laravel-9.x-red)](https://laravel.com)  
[![PHP Version](https://img.shields.io/badge/PHP-8.0%2B-blue)](https://www.php.net)  

---

## Giới thiệu

Dự án này là một hệ thống quản lý sinh viên được xây dựng bằng Laravel, một framework PHP nổi tiếng với cú pháp thanh lịch và các tính năng mạnh mẽ. Hệ thống sử dụng kiến trúc MVC của Laravel để tách biệt các mối quan tâm và đảm bảo tính bảo trì. Ứng dụng cũng sử dụng PostgreSQL làm hệ quản trị cơ sở dữ liệu và Tailwind CSS để tạo kiểu.


---

## Tính Năng

- **Danh Sách Sinh Viên**: Xem danh sách tất cả sinh viên.
- **Danh Sách Lớp học**: Xem danh sách lớp học.
- **Danh Sách Khoa**: Xem danh sách khoa.
- **Danh Sách Môn Học**: Xem danh sách các môn học
- **Xem Chi Tiết**: Khám phá sâu về thông tin từng sinh viên, bao gồm kỹ năng, lớp học, GPA, và trạng thái học tập.
- **Thêm, Xóa, Sửa Sinh Viên**: Dễ dàng thêm sinh viên mới vào hệ thống.
- **Tìm Kiếm và Sắp Xếp**: Tìm kiếm và sắp xếp sinh viên theo tên, lớp, và GPA.
- **Seed Database**: Đổ dữ liệu mẫu chất lượng vào database bằng cách sử dụng factory và seeder tích hợp sẵn.

---

## Yêu Cầu

- **PHP 8.0+**
- **Composer**
- **PostgreSQL**
- **Node.js & npm**
- **Vite**

---


## Sơ đồ quan hệ ERD
![image](https://github.com/user-attachments/assets/4af2aada-c443-4b8e-bb48-48ce4266284f)


## Sơ đồ USECASE
![image](https://github.com/user-attachments/assets/89245f4c-0a64-4fd7-b1e2-2d71a9f6c6dd)



## Cài Đặt

Làm theo các bước dưới đây để khởi động hệ thống:

1. **Clone Repo:**

   ```bash
   git clone https://github.com/LeTruong07/qlihs.git
   cd qlihs
   ```

2. **Cài Đặt Dependencies:**

   Cài đặt các package PHP:
   ```bash
   composer install
   ```
   Sau đó, cài đặt các package JavaScript:
   ```bash
   npm install
   ```
   **Lưu ý:** Nếu bạn chưa có, hãy tải và cài đặt **Vite** từ [vitejs.dev](https://vitejs.dev/)

3. **Cấu Hình Môi Trường:**

   Sao chép file `.env.example` và cập nhật thông tin database của bạn:
   ```bash
   cp .env.example .env
   ```
   Mở file .env và cập nhật các thông tin cấu hình cần thiết, đặc biệt là thông tin kết nối database:
   ```bash
   DB_CONNECTION=pgsql
   DB_HOST=127.0.0.1
   DB_PORT=5432
   DB_DATABASE=your_database_name
   DB_USERNAME=your_database_username
   DB_PASSWORD=your_database_password
   ```
5. **Tạo Application Key:**

   ```bash
   php artisan key:generate
   ```

6. **Chạy Migration & Seed Database:**

   Chạy các migration và seed dữ liệu mẫu vào database:
   ```bash
   php artisan migrate --seed
   ```
   Chạy Vite để build các assets:
   ```bash
   npm run build
   ```
8. **Chạy Server:**

   Khởi chạy server với:
   ```bash
   php artisan serve
   ```
   Sau đó, mở trình duyệt tại [http://localhost:8000](http://localhost:8000) và tận hưởng trải nghiệm.

---

## Seed Database

Dự án bao gồm:

- **StudentFactory**: Sinh ra dữ liệu mẫu với các kỹ năng và lớp học đã được định sẵn.
- **StudentSeeder**: Dùng factory để thả luôn dữ liệu sinh viên mẫu vào database.
- **FacultySeeder**: Tạo các khoa và các lớp học tương ứng.
- **SubjectSeeder**: Tạo các môn học và gán ngẫu nhiên cho sinh viên.

# Có thể truy cập website public để xem [trực tiếp](qlihs-production-dea5.up.railway.app) (đã đóng)
