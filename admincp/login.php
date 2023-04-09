<?php
	session_start();
	include('config/connect.php');
	if(isset($_POST['dangnhap'])){
		$taikhoan = $_POST['usernamez'];
		$matkhau = ($_POST['password']);
        $sql_nguoidung = "SELECT * FROM tbl_dangky ,tbl_admin WHERE (tbl_dangky.taikhoan='".$taikhoan."' AND tbl_dangky.matkhau='".$matkhau."' AND tbl_dangky.chucvu=1) OR (tbl_admin.username='".$taikhoan."' AND tbl_admin.password='".$matkhau."' ) LIMIT 1";
		$row_nguoidung = mysqli_query($connect,$sql_nguoidung); 
        $count = mysqli_num_rows($row_nguoidung);
        
	 
           if($count>0){
                $_SESSION['dangnhap']=$taikhoan;
                header("Location:index.php");
            }else{
                echo '<script>alert("Tài khoản hoặc Mật khẩu không đúng,vui lòng nhập lại.");</script>';
                header("Location:login.php");
            }
       
	}
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_login.css">
    <title>Login</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous" defer></script>
    
</head>
<body>
   
    <div class="warpper">
        <header>
            <div class="header">
                <h1 id="title">LOGIN</h1>

            </div>
        </header>
        <nav>
        
    <form action="" method="POST" id="login-form">
       <div class="from-group">
           <label for="" id="name-label"> Tài Khoản</label><br>
           <input type="text" name="usernamez" id="name">
       </div>

       <div class="from-group">
           <label for="" id="password-label"> Mật khẩu</label><br>
           <input type="password" name="password" id="password">
       </div>
       <div class="from-group">
           <input type="submit" class="btn-login mt-3" name="dangnhap" value="Đăng Nhập">
       </div>
    </form>
        
    </nav>
    </div>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>