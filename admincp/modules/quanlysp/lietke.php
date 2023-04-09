<?php
    
    
    $sql_lietke_sp="SELECT * FROM tbl_sanpham ,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc ORDER BY id_sanpham DESC";
    $result_lietke_sp= mysqli_query($connect,$sql_lietke_sp);
?>
<div class="list_product">
<h3>Liệt kê danh mục sản phẩm</h3>
 <table class="table"> 
    <thead>
     <tr>
         <th scope="col">ID</th>
         <th scope="col">Tên sản phảm</th>
         <th scope="col">Hình ảnh </th>
         <th scope="col">Giá sản phẩm</th>
         <th scope="col">Số lượng</th>
         <th scope="col">Danh mục</th>
         <th scope="col">Mã sản phẩm</th>
         <th scope="col">Tóm tăt</th>
         <th scope="col">Trạng thái</th>
         <th scope="col">Quản lý</th>
     </tr>
    </thead>
     <?php
    $i=0;
    while($row=mysqli_fetch_array($result_lietke_sp)){
        $i++;
    
     ?>
     <tbody>
     <tr>
         <th scope="row"><?php echo $i ?></th>
         <td style="width:80px;height:150px; text-align: center;">
                            <?php echo $row['tensanpham'] ?>   
         </td>
         
         <td style="width:150px;height:150px;" >
                            <img src="modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?> " width="100%" >   
         </td>

         <td style="width:150px;text-align: center;">
                            <?php echo number_format($row['giasanpham'],0,',','.').'VNĐ'  ?>   
         </td>
         <td><?php echo $row['soluong'] ?>      </td>
         <td><?php echo $row['tendanhmuc'] ?>      </td>
         <td><?php echo $row['masanpham'] ?>    </td>
         <td><?php echo $row['tomtat'] ?>       </td>
         <td><?php if($row['trangthai']==1){
                echo "Mới";
         }else{
                echo "Cũ";
         }?>
         </td>
         <td>
            <a href="modules/quanlysp/xuly.php?idsanpham=<?php echo $row['id_sanpham']?>">Xóa</a>|
             <a href="?action=quanlysanpham&query=sua&idsanpham=<?php echo $row['id_sanpham']?>">Sửa</a>
         </td>
     </tr>
     </tbody>  
     <?php
    }
    ?>
 </table>
</div>