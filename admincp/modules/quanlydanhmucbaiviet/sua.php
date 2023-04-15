<?php
    $sql_sua="SELECT * FROM tbl_danhmucbaiviet WHERE id_baiviet='$_GET[idbaiviet]' LIMIT 1";
    $result_sua= mysqli_query($connect,$sql_sua);
?>
<h3>Sửa danh mục bài viết</h3>
 <table class="table container">
   <form method="POST" action="modules/quanlydanhmucbaiviet/xuly.php?idbaiviet=<?php echo $_GET['idbaiviet']?>">
    <?php
        while($dong =mysqli_fetch_array($result_sua)){
    ?>
   <tr>
        <th colspan="2" scope="col" style="text-align: center;">Danh mục bài viết cần sửa</th>
    </tr>
    <tr>
        <th scope="row">Tên danh mục</th>
        <td><input type="text" name="tendanhmucbaiviet" id="disabledTextInput" class="form-control" value="<?php echo $dong['tendanhmuc_baiviet'] ?>" ></td>
    </tr>
    <tr>
        <th scope="row">Thứ tự</th>
        <td><input type="number" name="thutu" id="disabledTextInput" class="form-control" value="<?php echo $dong['thutu']?>"></td>
    </tr>
    <tr>

        <td colspan="2"><input type="submit" value="Sửa bài viết" name="suadanhmucbaiviet"></td>
    </tr>
    <?php
        }
    ?>
</form>
 </table>