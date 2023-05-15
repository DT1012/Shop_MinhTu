 <h3>Chi tiết đơn hàng</h3>
 <?php
    $code=$_GET['code'];
    $sql_lietke_dh="SELECT * FROM tbl_cart_detail ,tbl_sanpham  WHERE tbl_cart_detail.id_sanpham=tbl_sanpham.id_sanpham 
        AND tbl_cart_detail.code_cart=$code
        ORDER BY tbl_cart_detail.id_cart_detail DESC";
    $result_lietke_dh= mysqli_query($connect,$sql_lietke_dh);
?>
 <table class="container table"> 
     <tr>
         <th scope="col">ID</th>
         <th scope="col">Mã đơn hàng</th>
         <th scope="col">Tên Sản phẩm</th>
         <th scope="col">Hình </th>
         <th scope="col">Số lượng</th>
         <th scope="col">thời gian mua hàng</th>

         <th scope="col">Đơn giá</th>
         <th scope="col">Thành tiền</th>
         
     </tr>
     <?php
    $i=0;
    $tongtien=0;
    while($row=mysqli_fetch_array($result_lietke_dh)){
        $i++;
        $thanhtien= $row['giasanpham'] * $row['soluongmua'];
        $tongtien+=$thanhtien;
     ?>
     <tr>
         <th scope="row"><?php echo $i ?></th>
         <td><?php echo $row['code_cart'] ?></td>
         <td><?php echo $row['tensanpham']?></td>
         <td style="width:150px;height:150px;" >
            <img src="modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?> " width="100%" >   
         </td>
         <td><?php echo $row['soluongmua']?></td>
         <td><?php echo $row['thoi_gian_dat_hang']?></td>
         
         <td><?php echo number_format($row['giasanpham'],0,',','.').'VNĐ' ?></td>
         <td><?php echo number_format($thanhtien,0,',','.').'VNĐ' ?></td>
         
     </tr>
     <?php
    }
    ?>
     <tr>
         <th colspan="7">Tổng tiền : <?php echo number_format($tongtien,0,',','.').'VNĐ' ?></th>
         
     </tr>
     <tr>
    
     </tr>
    
 </table>


 