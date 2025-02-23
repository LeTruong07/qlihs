# Hệ Thống Quản Lý Sinh Viên

[![Laravel Version](https://img.shields.io/badge/Laravel-9.x-red)](https://laravel.com)  
[![PHP Version](https://img.shields.io/badge/PHP-8.0%2B-blue)](https://www.php.net)  
[![License: MIT](https://img.shields.io/badge/License-MIT-green)](LICENSE)

---

## Mục Lục

- [Tổng Quan](#tổng-quan)
- [Tính Năng](#tính-năng)
- [Yêu Cầu](#yêu-cầu)
- [Cài Đặt](#cài-đặt)
- [Seed Database](#seed-database)
- [Cách Sử Dụng](#cách-sử-dụng)

---

## Tổng Quan

Hệ Thống Quản Lý Sinh Viên này là một ứng dụng Laravel "chất lừ" giúp bạn:
- **Hiển thị** danh sách tất cả sinh viên cực nhanh.
- **Xem** chi tiết thông tin của từng sinh viên.
- **Thêm mới** sinh viên cực dễ.
- **Seed** dữ liệu mẫu vào database để test thử ngay.

---

## Tính Năng

- **Danh Sách Sinh Viên**: Xem tổng quan nhanh về tất cả sinh viên.
- **Xem Chi Tiết**: Khám phá sâu về thông tin từng sinh viên, bao gồm kỹ năng, lớp học và GPA.
- **Thêm Sinh Viên**: Dễ dàng thêm sinh viên mới vào hệ thống.
- **Seed Database**: Đổ dữ liệu mẫu chất lượng vào database bằng cách sử dụng factory và seeder tích hợp sẵn.

---

## Yêu Cầu

- **PHP 8.0+**
- **Composer**
- **PostgreSQL**
- **Node.js & npm**

---

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

3. **Cấu Hình Môi Trường:**

   Sao chép file `.env.example` và cập nhật thông tin database của bạn:
   ```bash
   cp .env.example .env
   ```

4. **Tạo Application Key:**

   ```bash
   php artisan key:generate
   ```

5. **Chạy Migration & Seed Database:**

   Chạy các migration và seed dữ liệu mẫu vào database:
   ```bash
   php artisan migrate --seed
   ```

6. **Chạy Server:**

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


