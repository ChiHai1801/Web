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
$sql = "select * FROM product WHERE ID='".$id."'";

$result = $conn->query($sql);
$row = $result->fetch_assoc();

?>

<body>
<?php print_r($row)?>
<main class="main" >
            <div class="table">
                <h1 class="form_title">Sửa Sản Phẩm</h1>
                <form action="sua2.php" method="post"> 
                <div class="form-row">
                <lable for="name">Name:</lable>
                ID:<input type="text" name="id" value="<?php echo $row['id'];?>"><br>
                <i class="tick fas fa-check"></i>
                </div> 
                <div class="form-row">
                <lable for="name">Name:</lable>
                Name: <input type="text" name="name" value="<?php echo $row['name'];?>"><br>
                <i class="tick fas fa-check"></i>
                </div> 
                <div class="form-row">
                <lable for="name">Name:</lable>
                Price: <input type="number" name="tien"  value="<?php echo $row['price'];?>"><br>
                <i class="tick fas fa-check"></i>
                </div> 
                <div class="form-row">
                <lable for="name">Name:</lable>
                Content: <input type="text" name="content" value="<?php echo $row['content'];?>"><br>
                <i class="tick fas fa-check"></i>
                </div> 
                <div class="form-row">
                <lable for="name">Name:</lable>
                Image: <input type="file" name="fileToUpload" value="<?php echo $row['image_link'];?>"><br>
                <i class="tick fas fa-check"></i>
                </div> 
                <div class="form__submit">
                    <input type="submit">
                </div>
</form>
</div>
</main>

</body>
</html>
<div class="form-row">
<lable for="name">Name:</lable>
<i class="tick fas fa-check"></i>
</div>
          