<!DOCTYPE HTML>
<html>  
    <head>
        <link rel="stylesheet"  href="login.css">
    </head>
    <body>

<main class="main" >
    <div class="table">
    <h1 class="form_title">Đăng nhâp</h1>

    <form action="log.php" method="post">
        
        <div class="form-row">
            <lable>Username:</lable>
            <input type="text" name="email" placeholder="Nhập Email" required>
        </div>

        <div class="form-row">
            <lable>Password:</lable>
            <input type="password" name="password" id="password" placeholder="Nhập mật khẩu" required><br>
        </div>

        <div class="form-submit">
            <input class="submit" type="submit" value="Submit">
        </div>
        </form>
    </div>
</main>

    </body>
</html>

