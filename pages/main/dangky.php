<h2 style="text-align: center;">Trang đăng ký</h2>


<h3 style="text-align: center;">Đăng ký thành viên</h3>
<style type="text/css">
	table.dangky tr td {
	    padding: 5px;
	}
</style>
<form action="" method="POST">
<table class="table container d-flex justify-content-center" style="border: 0px solid transparent;">
	<tr>
		<th scope="row">Họ và tên</th>
		<td><input type="text" size="50" name="hovaten"></td>
	</tr>
    <tr>
		<th scope="row">Tài khoản</th>
		<td><input type="text" size="50" name="taikhoan"></td>
	</tr>
    <tr>
		<th scope="row">Mật khẩu</th>
		<td><input type="password" size="50" name="matkhau"></td>
	</tr>
    <tr>
		<th scope="row">Nhập lại mật khẩu</th>
		<td><input type="password" size="50" name="rematkhau"></td>
	</tr>
	<tr>
		<th scope="row">Email</th>
		<td><input type="text" size="50" name="email"></td>
	</tr>
	<tr>
		<th scope="row">Điện thoại</th>
		<td><input type="text" size="50" name="dienthoai" ></td>
	</tr>
	<tr>
		<th scope="row">Địa chỉ</th>
		<td><input type="text" size="50" name="diachi" ></td>
	</tr>
	
	<tr>
		
		<td><input type="submit" name="dangky" value="Đăng ký"></td>
		<td><a href="index.php?quanly=dangnhap">Đăng nhập nếu có tài khoản</a></td>
	</tr>
</table>

</form>
<div>
<?php
	if(isset($_POST['dangky'])) {
		$tenkhachhang = $_POST['hovaten'];
		$taikhoan= $_POST['taikhoan'];
        $matkhau = md5($_POST['matkhau']);
        $rematkhau=  md5($_POST['rematkhau']);
		$email = $_POST['email'];
		$dienthoai = $_POST['dienthoai'];
		$diachi = $_POST['diachi'];
		if (!$tenkhachhang || !$taikhoan || !$matkhau || !$rematkhau || !$email || !$dienthoai || !$diachi)
		{
			echo "Vui lòng nhập đầy đủ thông tin.";
			
			
		}elseif($matkhau!=$rematkhau){
			echo "mat khau chua trung"; 

		}
		else{
			$sql_dangky = "INSERT INTO tbl_dangky(hovaten,taikhoan,matkhau,sodienthoai,email,diachi) VALUE('".$tenkhachhang."','".$taikhoan."','".$matkhau."','".$dienthoai."','".$email."','".$diachi."')";
			$query_dangky=mysqli_query($connect,$sql_dangky);
			if($query_dangky){
				echo '<p style="color:green">Bạn đã đăng ký thành công</p>';
				$_SESSION['dangky'] = $taikhoan;
				$_SESSION['email'] = $email;
				$_SESSION['id_khachhang'] = mysqli_insert_id($connect);
				header("Location:index.php?quanly=dangnhap");
				}
			}
		}
			


		
	
	
?>
</div>