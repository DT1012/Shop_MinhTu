<?php
    $sql_lietke_dh="SELECT * FROM tbl_giohang ,tbl_dangky,tbl_cart_detail WHERE tbl_giohang.id_khachhang=tbl_dangky.id_khachhang and tbl_giohang.code_cart = tbl_cart_detail.code_cart ORDER BY thoi_gian_dat_hang DESC";
    $result_lietke_dh= mysqli_query($connect,$sql_lietke_dh);
    if(isset($_GET['xacnhanhuy'])&& isset($_GET['code'])){
        $xacnhanhuy = $_GET['xacnhanhuy'];
        $code = $_GET['code'];
    }else{
        $xacnhanhuy ='';
        $code = '';
    }
    $sql_update_giohang = mysqli_query($connect,"UPDATE tbl_giohang SET huydon = '$xacnhanhuy' where code_cart = '$code'")
?>


<h3>Danh sách đơn hàng của người dùng</h3>
 <table class="table container"> 
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Mã đơn hàng</th>
            <th scope="col">Tên khách hàng</th>
            <th scope="col">Địa chỉ</th>
            
            <th scope="col">Tài khoản</th>
            <th scope="col">thời gian đặt hàng</th>
            <th scope="col">Hình thức thanh toán</th>
            <th scope="col">Điện thoại</th>
            <th scope="col">Tinh Trạng </th>
            <th scope="col">Hủy đơn </th>

            <th scope="col" colspan="2">Quản lý </th>
        </tr>
    </thead>
     <?php
    $i=0;
    while($row=mysqli_fetch_array($result_lietke_dh)){
        $i++;
    
     ?>
     <tr>
         <th scope="row"><?php echo $i ?></th>
         <td><?php echo $row['code_cart'] ?></td>
         <td><?php echo $row['hovaten']?></td>
         <td><?php echo $row['diachi']?></td>
         <td><?php echo $row['taikhoan']?></td>
         <td><?php echo $row['thoi_gian_dat_hang']?></td>
         <td><?php echo $row['cart_payment']?></td>
         <td><?php echo $row['sodienthoai']?></td>
         <td>
    	<?php if($row['cart_status']==1){
    		echo '<a href="modules/quanlydonhang/xuly.php?code='.$row['code_cart'].'">Đơn hàng mới</a>';
    	}else{
    		echo 'Đã xem';
    	}
    	?>
        </td>
        <td>
    	<?php if($row['huydon']==0){
    	}elseif($row['huydon']==1){
    		echo '<a href="index.php?action=quanlydonhang&query=them&code=' .$row["code_cart"].'&xacnhanhuy=2">Xác nhận hủy đơn</a>';
    	}else{
            echo 'Đã Hủy';
        }
    	?>
        </td>
        <td>
            <a href="index.php?action=quanlydonhang&query=xemdonhang&code=<?php echo $row['code_cart']?>">Xem đơn hàng</a>|
        </td>
        <td>
            <a href="modules/quanlydonhang/indonhang.php?code=<?php echo $row['code_cart']?>">In đơn hàng</a>|
        </td>
     </tr>
     
     <?php
    }
    ?>
 </table>