<h3 style="text-align: center;" class="m-5">Lịch sử đơn hàng</h3>
<?php
    $id_khachhang = $_SESSION['id_khachhang'];
    
    $sql_lietke_dh="SELECT * FROM tbl_giohang,tbl_dangky,tbl_cart_detail WHERE tbl_giohang.code_cart = tbl_cart_detail.code_cart AND tbl_giohang.id_khachhang = tbl_dangky.id_khachhang AND tbl_giohang.id_khachhang='$id_khachhang' ORDER BY tbl_giohang.id_cart DESC";
    $result_lietke_dh= mysqli_query($connect,$sql_lietke_dh);
    if(isset($_GET['huydon'])&& isset($_GET['code'])){
        $huydon = $_GET['huydon'];
        $code = $_GET['code'];
    }else{
        $huydon ='';
        $code = '';
    }
    $sql_update_giaodich = mysqli_query($connect,"UPDATE tbl_giohang SET huydon = '$huydon' where code_cart = '$code'")
?>
 <table class="table container"> 
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Mã đơn hàng</th>
            
            <th scope="col">thời gian đặt hàng</th>
            <th scope="col">Hình thức thanh toán</th>
           
            <th scope="col">Tinh Trạng </th>
            <th scope="col">Yêu cầu hủy </th>
            <th scope="col" colspan="2">Quản lý </th>
        </tr>
    </thead>
     <?php
     if($result_lietke_dh == false) echo "lỗi";
    $i=0;
    while($row=mysqli_fetch_array($result_lietke_dh)){
        $i++;
    
     ?>
     <tr>
         <th scope="row"><?php echo $i ?></th>
         <td><?php echo $row['code_cart'] ?></td>
         
         <td><?php echo $row['thoi_gian_dat_hang']?></td>
         <td><?php echo $row['cart_payment']?></td>
         
         <td>
    	<?php if($row['cart_status']==1){
    		echo 'Đơn hàng đã được xử lý';
    	}else{
    		echo 'Đơn hàng đang chờ được xử lý';
    	}
    	?>
        </td>
        <td>
            <?php
            if($row['huydon'] == 0){
                ?>
                <a href="index.php?quanly=lichsudonhang&code=<?php echo $row['code_cart'] ?>&huydon=1">Yêu cầu hủy đơn</a>
           <?php
            }elseif($row['huydon'] == 1){
                ?>
                <p>Đang chờ hủy...</p>
            <?php
            }
            else{
                echo 'Đã Hủy';
            }
            ?>
    		
        </td>
        <td>
            <a href="index.php?quanly=xemdonhang&code=<?php echo $row['code_cart']?>">Xem đơn hàng</a>|
        </td>
        <td>
            <a href="admincp/modules/quanlydonhang/indonhang.php?code=<?php echo $row['code_cart']?>">In đơn hàng</a>|
        </td>
     </tr>
     
     <?php
    }
    ?>
 </table>