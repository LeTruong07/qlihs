<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management</title>
    @vite('resources/css/app.css')
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="bg-white p-8 rounded shadow-md text-center max-w-lg">
        <img src="https://cdn.haitrieu.com/wp-content/uploads/2021/11/Logo-DH-Phenikaa-V-Bl.png" alt="Phenikaa University Logo" class="mx-auto mb-4 h-16">
        <h2 class="text-3xl font-bold mb-4">Quản lí học sinh</h2>
        <p class="mb-6">Hệ thống quản lý học sinh giúp bạn dễ dàng quản lý thông tin học sinh, bao gồm kỹ năng, lớp học và điểm GPA.</p>
        <p class="mb-6">Bấm nút dưới để nhận thông tin học sinh.</p>
        <a href="/students" class="btn btn-primary mb-4">Thông tin học sinh</a>
        <div class="text-left">
            <h3 class="text-xl font-semibold mb-2">Tính năng chính:</h3>
            <ul class="list-disc list-inside">
                <li>Quản lý danh sách học sinh</li>
                <li>Xem chi tiết thông tin học sinh</li>
                <li>Thêm mới học sinh</li>
                <li>Chỉnh sửa thông tin học sinh</li>
                <li>Xóa học sinh</li>
                <li>Tìm kiếm học sinh theo tên</li>
            </ul>
        </div>
    </div>
</body>
</html>