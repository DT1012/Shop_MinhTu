
 <?php
	
	session_start();

	include('../../../admincp/config/connect.php');
	require('../../../carbon/autoload.php');
	require('../../../mail/sendmail.php');
	use Carbon\Carbon;
	use Carbon\CarbonInterval;
	$now = Carbon::now('Asia/Ho_Chi_Minh');
	if(isset($_POST['redirect']) && $_POST['redirect']){
		$id_khachhang = $_SESSION['id_khachhang'];
		$code_order = rand(0,9999);// random tuwf 0 den 4 so
		$cart_pay=$_POST['payment'];
		$insert_cart = "INSERT INTO tbl_giohang(id_khachhang,code_cart,cart_status,cart_payment) VALUE('".$id_khachhang."','".$code_order."',1,'".$cart_pay."')";
		$cart_query = mysqli_query($connect,$insert_cart);
		if($cart_query){
			//thêm giỏ hàng chi tiết
			foreach($_SESSION['cart'] as $key => $value){
				$id_sanpham=$value['id'];
				$soluong=$value['soluong'];
				$date = $now;
				$insert_order_details = "INSERT INTO tbl_cart_detail(id_sanpham,code_cart,soluongmua,thoi_gian_dat_hang) VALUE('".$id_sanpham."','".$code_order."','".$soluong."','".$date."')";
				mysqli_query($connect,$insert_order_details);
			}
			$tieude = "Đặt hàng website bán hàng đồ nội thất Minh Tú Shop thành công!";
			$noidung = "<p>Cảm ơn quý khách đã đặt hàng với mã đơn hàng:".$code_order."</p>";
			$noidung.= "<h4>Đơn hàng bao gồm: </h4>";
			foreach($_SESSION['cart'] as $key => $val){
				$noidung.= "<ul style='border:1px solid blue;margin:10px;'>
				<li>".$val['tensanpham']."</li>
				<li>".$val['masp']."</li>
				<li>".number_format($val['giasanpham'],0,',','.')."đ</li>
				<li>".$val['soluong']."</li>

				</ul>";
			}
			$mail = new Mailer();
			$mail->dathangmail($tieude,$noidung,$_SESSION['email']);
		}
		unset($_SESSION['cart']);
		header('Location:../../../index.php?quanly=chitietdonhang');
	}
?>