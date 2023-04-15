<?php
    $sql_sua_sp="SELECT * FROM tbl_sanpham WHERE id_sanpham='$_GET[idsanpham]' LIMIT 1";
    $result_sua_sp= mysqli_query($connect,$sql_sua_sp);
?>
 <h3>Sửa sản phẩm</h3>
 <table class="table container">
    <form method="POST" action="modules/quanlysp/xuly.php?idsanpham=<?php echo $_GET['idsanpham']?>" enctype="multipart/form-data">
 <?php
    while($row =mysqli_fetch_array($result_sua_sp)){
        

?>
   
    <tr>
        <th colspan="2" style="text-align: center;">Thông tin sản phẩm cần sửa</th>
    </tr>
    <tr>
        <th scope="row">Tên sản phẩm</th>
        <td><input type="text"  value="<?php echo $row['tensanpham']?>" name="tensanpham" id="disabledTextInput" class="form-control"></td>
    </tr>
    <tr>
        <th scope="row">Mã sản phẩm</th>
        <td><input type="text" name="masp" value="<?php echo $row['masanpham']?>" id="disabledTextInput" class="form-control"></td>
    </tr>
    <tr>
        <th scope="row">Giá</th>
        <td><input type="number" name="giasp" value="<?php echo $row['giasanpham']?>"id="disabledTextInput" class="form-control"></td>
    </tr>
    <tr>
        <th scope="row">Số lượng</th>
        <td><input type="text" name="soluong" value="<?php echo $row['soluong']?>"id="disabledTextInput" class="form-control"></td>
    </tr>
    <tr>
        <th scope="row">Hình ảnh</th>
        <td><input type="file" name="hinhanh" id="disabledTextInput" class="form-control">
        <img src="modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?> " width="150px" >
    </td>
    </tr>
    <tr>
        <th scope="row">Tóm tắt</th>
        <td> <textarea name="tomtat"  rows="5" cols="50" style="resize: none;"id="disabledTextInput" class="form-control"><?php echo $row['tomtat']?></textarea> </td>
    </tr>
    <tr>
        <th scope="row">Nội dung</th>
        <td> <textarea name="noidung" rows="5"  cols="50" style="resize: none;"id="disabledTextInput" class="form-control"><?php echo $row['noidung']?></textarea> </td>
    </tr>
    <tr>
        <th scope="row">Danh mục sản phẩm</th>
        <td>
          <select name="danhmuc"  id="disabledSelect" class="form-selecth" >
                <?php
                    $sql_danhmuc="SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
                    $query_danhmuc=mysqli_query($connect,$sql_danhmuc);
                    while($row_danhmuc=mysqli_fetch_array($query_danhmuc)){
                        if($row_danhmuc['id_danhmuc']==$row['id_danhmuc']){
                ?>
                <option value="<?php echo $row_danhmuc['id_danhmuc'] ;?>" selected><?php echo $row_danhmuc['tendanhmuc']?></option>
                <?php
                        }else{
                        
                ?>
                <option value="<?php echo $row_danhmuc['id_danhmuc']?>"><?php echo $row_danhmuc['tendanhmuc']?></option>
                <?php
                        }
                    }
                ?>
          </select>
        </td>
    </tr>
    <tr>
        <th scope="row">Tình trạng </th>
        <td>
          <select name="hienthi" id="disabledSelect" class="form-selecth >
              <?php
                if($row['trangthai']==1){
              ?>
                <option value="1" selected>Mới</option>
                <option value="0">Cũ</option>
                <?php
                }else{
                ?>
                <option value="1" >Mới</option>
                <option value="0" selected>Cũ</option>
                <?php
                }
                ?>
          </select>
        </td>
    </tr>
    <tr>

        <td colspan="2"><input type="submit" value="Sửa sản phẩm" name="suasanpham"></td>
    </tr>
</form>
<?php
}
?>
 </table>