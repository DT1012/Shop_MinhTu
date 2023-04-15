<?php
    $sql_lietke="SELECT * FROM tbl_danhmucbaiviet ORDER BY thutu DESC";
    $result_lietke= mysqli_query($connect,$sql_lietke);
?>
<h3>Liệt kê danh mục sản phẩm bài viết</h3>
 <table class="table container">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Tên danh mục bài viết</th>
            <th scope="col">Thứ tự</th>
            <th scope="col"></th>
        </tr>
    </thead>
     <?php
    $i=0;
    while($row=mysqli_fetch_array($result_lietke)){
        $i++;
    
     ?>
     <tbody>
     <tr>
         <th scope="row"><?php echo $i ?></th>
         <td><?php echo $row['tendanhmuc_baiviet'] ?></td>
         <td><?php echo $row['thutu']?></td>
         <td>
            <a href="modules/quanlydanhmucbaiviet/xuly.php?idbaiviet=<?php echo $row['id_baiviet']?>">Xóa</a>|
             <a href="?action=quanlydanhmucbaiviet&query=sua&idbaiviet=<?php echo $row['id_baiviet']?>">Sửa</a>
         </td>
     </tr>
     </tbody>
     <?php
    }
    ?>
 </table>