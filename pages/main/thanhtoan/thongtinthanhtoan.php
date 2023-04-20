<h2 class="mt-5 ps-5" >Thông tin thanh toán</h2>
 <div class="container">
 <?php
	$id_dangky = $_SESSION['id_khachhang'];
	$sql_get_vanchuyen = mysqli_query($connect,"SELECT * FROM tbl_shipping WHERE id_dangky='$id_dangky' LIMIT 1");
	$count = mysqli_num_rows($sql_get_vanchuyen);
	if($count>0){
		$row_get_vanchuyen = mysqli_fetch_array($sql_get_vanchuyen);
		$name = $row_get_vanchuyen['name'];
		$phone = $row_get_vanchuyen['phone'];
		$address = $row_get_vanchuyen['address'];
		$note = $row_get_vanchuyen['note'];
	}else{
		$name = '';
		$phone = '';
		$address = '';
		$note = '';
	}
    if(isset($_SESSION['id_khachhang'])){
?>
    <div class="arrow-steps clearfix">
            <div class="step done"> <span> <a href="index.php?quanly=giohang" >Giỏ hàng</a></span> </div>
            <div class="step done"> <span><a href="index.php?quanly=vanchuyen" >Vận chuyển </a></span> </div>
            <div class="step current"> <span><a href="index.php?quanly=thongtinthanhtoan" >Thanh toán</a><span> </div>
            <div class="step"> <span><a href="#" >Đơn hàng</a><span> </div>            
        </div>
    <?php
  } 
  ?>
  	<form action="pages/main/thanhtoan/thanhtoan.php" method="POST">
	<div class="row">
		<ul>
  			<li>Họ và tên vận chuyển : <b><?php echo $name ?></b></li>
  			<li>Số điện thoại : <b><?php echo $phone ?></b></li>
  			<li>Địa chỉ : <b><?php echo $address ?></b></li>
  			<li>Ghi chú : <b><?php echo $note ?></b></li>
  		</ul>
  		<h5>Giỏ hàng của bạn</h5>
  	<table class="table">
		<tr>
        <th>ID</th>
        <th>Mã :</th>
        <th>Tên</th>
        <th>Hình</th>
        <th>Số lượng</th>
        <th>Giá :</th>
        <th>Thành tiền</th>   
		</tr>
    <?php
        if(isset($_SESSION['cart'])){
            $i=0;
            $tongtien=0;
            foreach($_SESSION['cart'] as $cart_item){
                $thanhtien = $cart_item['soluong'] * $cart_item['giasanpham'];
                $tongtien+=$thanhtien;
                $i++;
    ?>
        <tr>
            <td><?php echo $i ?></td>
            <!-- ở đây lấy dữ liêu cart_item['masp'] từ themgiohang.php -->
            <td><?php echo $cart_item['masp']?></td>
            <td><?php echo $cart_item['tensanpham'] ?></td>
            <td><img src="admincp/modules/quanlysp/uploads/<?php echo $cart_item['hinhanh'] ?>" width="150px"></td>

            <td>
                <?php echo $cart_item['soluong'] ?>
            </td>

            <td><?php echo number_format($cart_item['giasanpham'],0,',','.') . ' VNĐ'?></td>
            <td><?php  echo number_format($thanhtien,0,',','.') . ' VNĐ' ?></td>
        </tr>


    <?php 
            }
    ?>

        <tr>
            <td colspan="9">
                <p style="float: left text-align: center;" class="btn btn-success"> Tổng tiền : <?php echo number_format($tongtien,0,',','.') . ' VNĐ'  ?></p>
                <div style="clear:both;"> </div>
		    </td>
		  </tr>
		  <?php	
		  }else{ 
		  ?>
		   <tr>
		    <td colspan="9"><p>Hiện tại giỏ hàng trống</p></td>
		   
		  </tr>
		  <tr>      
                <td colspan="9" style="text-align: center;"><a href="index.php?quanly=danhmuclist&id=4">Ấn để mua hàng</a></td>
                </tr>
		  <?php
		  } 
		  ?>
		 
	</table>
  	</div>
  	<style type="text/css">
  		.col-md-4.hinhthucthanhtoan .form-check {
		    margin: 11px;
		}
  	</style>

  	<div class="col-md-4 hinhthucthanhtoan">
  		<h4>Phương thức thanh toán</h4>
  		<div class="form-check">
		  <input class="form-check-input" type="radio" name="payment" id="exampleRadios1" value="Tiền Mặt" checked>
		  <label class="form-check-label" for="exampleRadios1">
		    Tiền mặt
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input" type="radio" name="payment" id="exampleRadios2" value="Chuyển Khoảng">
		  <label class="form-check-label" for="exampleRadios2">
		    Chuyển khoản
		  </label>
		</div>
		<input type="submit" value="Thanh toán ngay" name="redirect"  class="btn btn-danger">
		
		</form>

		<p></p>
	
		<?php
		$tongtien = 0;
		if(isset($_SESSION['cart'])){
			foreach($_SESSION['cart'] as $key => $value){
				$thanhtien = $value['soluong']*$value['giasanpham'];
				$tongtien+=$thanhtien;
			} 
			$tongtien_vnd = $tongtien;
			$tongtien_usd = round($tongtien/22667);
		}
		?>
		<input type="hidden" name="" value="<?php echo $tongtien_usd ?>" id="tongtien">
		

		 </div>
		 	
		 </div>
<?php

?>
	
