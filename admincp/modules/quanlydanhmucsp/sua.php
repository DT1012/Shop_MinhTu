<?php
    $sql_sua="SELECT * FROM tbl_danhmuc WHERE id_danhmuc='$_GET[iddanhmuc]' LIMIT 1";
    $result_sua= mysqli_query($connect,$sql_sua);
?>
<h3>Sửa danh mục sản phẩm</h3>
 <table class="table container">
   <form method="POST" action="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $_GET['iddanhmuc']?>">
    <?php
        while($dong =mysqli_fetch_array($result_sua)){
    ?>
   <tr>
        <th colspan="2" scope="col" style="text-align: center;">Danh mục sản phẩm cần sửa</th>
    </tr>
    <tr>
        <th scope="row">Tên danh mục</th>
        <td><input type="text" name="tendanhmuc" id="disabledTextInput" class="form-control" value="<?php echo $dong['tendanhmuc'] ?>" ></td>
    </tr>
    <tr>
        <th scope="row">Thứ tự</th>
        <td><input type="number" name="thutu" id="disabledTextInput" class="form-control" value="<?php echo $dong['thutu']?>"></td>
    </tr>
    <tr>

        <td colspan="2"><input type="submit" value="Sửa sản phẩm" name="suadanhmuc"></td>
    </tr>
    <?php
        }
    ?>
</form>
 </table>