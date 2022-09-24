<head>
        <link rel="stylesheet"  href="./admin/thanhvien.css">
</head>

<section class="bg-accent section-space-less2">
    <div class="container">
        <div class="modal-header">
            <div class="form_title">Đăng nhập Admin</div>
        </div>
        <div class="table">
            <form action="log.php" method="post" class="register">
                <div class="form-row">
                <label>Tên đăng nhập *</label>
                <input name="username_admin" type="text" placeholder="Tên đăng nhập" required />
                </div>

                <div class="form-row">
                <label>Mật khẩu *</label>
                <input name="password_admin" type="password" placeholder="Mật khẩu" required />
                </div>

                <div class="form-row">
                <button class="submit" type="submit" name="login_admin" value="Login">Đăng nhập</button>
                </div>
            </form>
        </div>
    </div>
</section>