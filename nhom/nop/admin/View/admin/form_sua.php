<!DOCTYPE HTML>
<html>  
    <head>
        <link rel="stylesheet"  href="thanhvien.css">
    </head>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qlbanhang";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$id =  $_POST['id'];
$sql = "select * FROM users WHERE ID='".$id."'";

$result = $conn->query($sql);
$row = $result->fetch_assoc();

?>

<body>
<?php print_r($row)?>
<main class="main" >
<div class="table">
    <h1 class="form_title">Sửa Bảng Thành Viên</h1>
        <form class="register"ction="sua.php" method="post">
                <div class="form-row">
                  ID:<input type="text" name="id" value="<?php echo $row['id'];?>"><br>
                <i class="tick fas fa-check"></i>
                </div>
                <div class="form-row">
                  Name: <input type="text" name="name" value="<?php echo $row['name'];?>"><br>
                <i class="tick fas fa-check"></i>
                </div>
                <div class="form-row">
                  Password: <input type="password" name="password"  value="<?php echo $row['password'];?>"><br>
                <i class="tick fas fa-check"></i>
                </div>
                <div class="form-row">
                Phone: <input type="phone" name="phone"  value="<?php echo $row['phone'];?>"><br>
                <i class="tick fas fa-check"></i>
                </div>
                <div class="form-row">
                created_at: <input type="date" name="created_at"  value="<?php echo $row['created_at'];?>"><br>
                <i class="tick fas fa-check"></i>
                </div>
                <div class="form-row">
                updated _at: <input type="date" name="updated_at"  value="<?php echo $row['updated_at'];?>"><br>
                <i class="tick fas fa-check"></i>
                </div>
                <div class="form__submit">
                <input class="submit"type="submit">
                </div>
        </form>
        </div>
        </main>
</body>
</html>
