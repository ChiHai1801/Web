<?php

class Logout {
	public function __construct()
	{
		unset($_SESSION['users']); // xóa session user đã tạo khi đăng nhập
		header('Location: /Admin/View/KhachHang/trangchu1.php'); // chuyển hướng về trang chủ
	}
}
$logout = new Logout();