<?php
    $sql_lietke_baiviet="SELECT * FROM tbl_baiviet,tbl_danhmucbaiviet WHERE tbl_baiviet.id_danhmuc = tbl_danhmucbaiviet.id_baiviet ORDER BY tbl_baiviet.id DESC";
    $result_lietke_baiviet= mysqli_query($connect,$sql_lietke_baiviet);

?>
<div class="list_product">
<h3>Liệt kê danh mục Bài viết</h3>
 <table class="table container"> 
    <thead>
     <tr>
         <th scope="col">ID</th>
         <th scope="col">Tên Bài viết</th>
         <th scope="col">Hình ảnh </th>
         <th scope="col">Tóm tăt</th>
         <th scope="col">Nội dung</th>
         <th scope="col">Trạng thái</th>
         <th scope="col">Danh mục bài viết</th>
     </tr>
    </thead>
    <tbody>
     <?php
        $i=0;

        while($row_lietke_bv=mysqli_fetch_array($result_lietke_baiviet)){
        $i++;
     ?>
     <tr>
         <th scope="row"><?php echo $i ?></th>
         <td >
            <?php echo $row_lietke_bv['tenbaiviet'] ?>   
         </td>
         
         <td style="width:150px;height:150px;" >
            <img src="modules/quanlybaiviet/uploads/<?php echo $row_lietke_bv['hinhanh'] ?> " width="100%" >   
         </td>
         <td><?php echo $row_lietke_bv['tomtat'] ?></td>
         <td><?php echo $row_lietke_bv['noidung'] ?></td>

         <td><?php if($row_lietke_bv['tinhtrang']==1){
             echo "Kích hoạt";
            }else{
                echo "Ẩn";
            }?>
         </td>
         <td><?php echo $row_lietke_bv['tendanhmuc_baiviet'] ?>      </td>
         <td>
            <a href="modules/quanlybaiviet/xuly.php?idbaiviet=<?php echo $row_lietke_bv['id']?>">Xóa</a>|
            <a href="?action=quanlybaiviet&query=sua&idbaiviet=<?php echo $row_lietke_bv['id']?>">Sửa</a>
         </td>
     </tr>
     <?php
    }
    ?>
    </tbody>  
 </table>
</div>