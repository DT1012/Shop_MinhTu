<h2 class="mt-4 ms-5" >Thông tin vận chuyển</h2>
<div class="container">
        <div class="arrow-steps clearfix">
            <div class="step done"> <span> <a href="index.php?quanly=giohang" >Giỏ hàng</a></span> </div>
            <div class="step current"> <span><a href="index.php?quanly=vanchuyen" >Vận chuyển </a></span> </div>
            <div class="step"> <span><a href="#" >Thanh toán</a><span> </div>
            <div class="step"> <span><a href="#" >Đơn hàng</a><span> </div>            
        </div>

<h4>Thông tin Người nhận</h4>


<?php
 	$id_dangky = $_SESSION['id_khachhang'];
 	$sql_get_vanchuyen = mysqli_query($connect,"SELECT * FROM tbl_shipping WHERE id_dangky='$id_dangky' LIMIT 1");
	$count = mysqli_num_rows($sql_get_vanchuyen);
     	if(isset($_POST['themvanchuyen'])){
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $note = $_POST['note'];
        $sql_them_vanchuyen = mysqli_query($connect,"INSERT INTO tbl_shipping(name,phone,address,note,id_dangky) values('$name','$phone','$address','$note','$id_dangky')");
        if($sql_them_vanchuyen){
            echo '<script>alert("Thêm thành công")</script>';
        }
    }elseif(isset($_POST['capnhapvanchuyen'])){
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $note = $_POST['note'];
        $sql_update_vanchuyen = mysqli_query($connect,"UPDATE tbl_shipping SET name='$name',phone='$phone',address='$address',note='$note',id_dangky='$id_dangky'where id_dangky='$id_dangky'");
        if($sql_update_vanchuyen){
            echo '<script>alert("Cập nhật thành công")</script>';
        }
    }
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

?>
 		
<div class="col-md-8">
    
    <form action="" autocomplete="off" class="ms-5" method="post">
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Họ và tên: </label>
        <input type="text" class="form-control" name="name" id="exampleFormControlInput1" placeholder="..." required value="<?php echo $name?>">
        </div>
        <div class="mb-3">

        <label for="exampleFormControlInput1" class="form-label">Số điện thoại: </label>
        <input type="text" class="form-control" name="phone" id="exampleFormControlInput1" placeholder="..." required value="<?php echo $phone ?>">
        </div>
        <div class="mb-3">

        <label for="exampleFormControlInput1" class="form-label">Địa chỉ</label>
        <input type="text" class="form-control" name="address" id="exampleFormControlInput1" placeholder="..." required value="<?php echo $address ?>">
        </div>
        <div class="mb-3">

        <label for="exampleFormControlInput1" class="form-label">Ghi chú</label>
        <input type="text" class="form-control" name="note" id="exampleFormControlInput1" placeholder="..." required value="<?php echo $note ?>">
        </div>
        <?php
            if($name==""&&$phone==""){
        ?>
        <div class="col-auto">
            <button type="submit" name="themvanchuyen" class="btn btn-primary mb-3">Thêm vận chuyển</button>
        </div>
        <?php
            }elseif($name!=""&&$phone!=""){
        ?>
        <div class="col-auto">
            <button type="submit" name="capnhapvanchuyen" class="btn btn-success mb-3">Cập nhật vận chuyển</button>
        </div>
        <?php        
            }
        ?>
    </form>
  		
	<!--GIO HANG---->
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
            <td colspan="8">
                <p style="float: left;"> Tổng tiền : <?php echo number_format($tongtien,0,',','.') . ' VNĐ'  ?></p>
                <div style="clear: both;"> </div>

                    <?php
                            if(isset($_SESSION['dangky'])){
                                
                    ?>
                            <p><a href="index.php?quanly=thongtinthanhtoan" class="btn btn-success">Hình thức thanh toán</a></p>
                    <?php
                    }else{
                    
                    ?>
                         <p><a href="index.php?quanly=dangky">Đăng kí đặt hàng</a></p>
                    <?php
                     }
                    ?>     
            </td>
        </tr>
    <?php   
        }else{ 
    ?>
        <tr>
            <td colspan="7">Hiện tại giỏ hàng trông</td>
        </tr><tr>
                    
                    <td colspan="7" style="text-align: center;"><a href="index.php?quanly=danhmuclist&id=4">Ấn để mua hàng</a></td>
                </tr>
    <?php
        }
    ?>
    </table>
</div>
</div>
