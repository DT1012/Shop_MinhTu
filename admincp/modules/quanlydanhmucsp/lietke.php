<?php
    $sql_lietke="SELECT * FROM tbl_danhmuc ORDER BY thutu DESC";
    $result_lietke= mysqli_query($connect,$sql_lietke);
?>
<h3>Liệt kê danh mục sản phẩm</h3>
 <table class="table container">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Tên danh mục</th>
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
         <td><?php echo $row['tendanhmuc'] ?></td>
         <td><?php echo $row['thutu']?></td>
         <td>
            <a href="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $row['id_danhmuc']?>">Xóa</a>|
             <a href="?action=quanlydanhmucsanpham&query=sua&iddanhmuc=<?php echo $row['id_danhmuc']?>">Sửa</a>
         </td>
     </tr>
     </tbody>
     <?php
    }
    ?>
 </table>