<?php
        include ("sidebar.php");
    ?>
   <div class="cart">

       <h2 class="ms-50" style="margin-left: 50px;">Cart</h2>
             
             <p><?php
                 if(isset($_SESSION['dangky'])){
                     echo 'xin chào: '.'<span style="color:red">'.$_SESSION['dangky'].'</span>';
                 
                 } 
           ?></p>
         
             
             <?php
                     if(isset($_SESSION['cart'])){
         
                         
                     }
         
             ?>
             <table border="1" style="width:100%;" class="table table_giohang">
             <thead>
                 <tr>
                     <th scope="col">ID</th>
                     <th scope="col">Mã :</th>
                     <th scope="col">Tên</th>
                     <th scope="col">Hình</th>
                     <th scope="col">Số lượng</th>
                     <th scope="col">Giá :</th>
                     <th scope="col">Thành tiền</th>
                     <th scope="col"></th>
                 </tr>
             </thead>
             <tbody>
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
                     <th scope="row"><?php echo $i ?></th>
                     <!-- ở đây lấy dữ liêu cart_item['masp'] từ themgiohang.php -->
                     <td><?php echo $cart_item['masp']?></td>
                     <td><?php echo $cart_item['tensanpham'] ?></td>
                     <td><img src="admincp/modules/quanlysp/uploads/<?php echo $cart_item['hinhanh'] ?>" class="img-thumbnail" width="200px"></td>
         
                     <td>
                         <a href="pages/main/giohang/suasoluong.php?cong=<?php echo $cart_item['id'] ?>"><i class="fa-solid fa-plus"></i></a>
                         <?php echo $cart_item['soluong'] ?>
                         <a href="pages/main/giohang/suasoluong.php?tru=<?php echo $cart_item['id'] ?>"><i class="fa-solid fa-minus"></i></a>
                     </td>
         
                     <td><?php echo number_format($cart_item['giasanpham'],0,',','.') . ' VNĐ'?></td>
                     <td><?php  echo number_format($thanhtien,0,',','.') . ' VNĐ' ?></td>
                     <td><a href="pages/main/giohang/xoasanpham.php?xoa=<?php echo $cart_item['id'] ?>">XÓA</a></td>
                 </tr>
         
         
             <?php 
                     }
             ?>
         
                 <tr>
                     <td colspan="8">
                         <p style="float: left;"> Tổng tiền : <?php echo number_format($tongtien,0,',','.') . ' VNĐ'  ?></p>
                         <p style="float: right;"><a href="pages/main/giohang/xoahetgiohang.php?xoatatca=xoahet">Xóa Hêt</a></p>
                         <div style="clear:both;"> </div>
                             <?php
                                     if(isset($_SESSION['dangky'])){
                                         
                             ?>
                                     <p><a href="pages/main/thanhtoan/index.php?quanly=vanchuyen">Đặt hàng</a></p>
                             <?php
                             }else{
                             
                             ?>
                                  <p><a href="index.php?quanly=dangnhap">Đăng nhập đặt hàng</a></p>
                             <?php
                              }
         
                             ?>              
                     </td>       
                 </tr>
             <?php
                     
                 }else{
         
                 
             ?>
         
         
         
                 <tr>
                     <td colspan="6">Hiện tại giỏ hàng trông</td>
                 </tr>
         
         
         
             <?php
                 }
             ?>
         
                 </tbody>
             </table>
   </div>