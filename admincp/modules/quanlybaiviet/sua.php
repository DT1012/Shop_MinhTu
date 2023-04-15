<?php
    $sql_sua_baiviet="SELECT * FROM tbl_baiviet WHERE id='$_GET[idbaiviet]' LIMIT 1";
    $result_sua_baiviet= mysqli_query($connect,$sql_sua_baiviet);
?>
 <h3>Sửa sản phẩm</h3>
 <table class="table container">
    <form method="POST" action="modules/quanlybaiviet/xuly.php?idbaiviet=<?php echo $_GET['idbaiviet']?>" enctype="multipart/form-data">
 <?php
    while($row =mysqli_fetch_array($result_sua_baiviet)){
?>
   
    <tr>
        <th colspan="2" style="text-align: center;">Thông tin sản phẩm cần sửa</th>
    </tr>
    <tr>
        <th scope="row">Tên sản phẩm</th>
        <td><input type="text"  value="<?php echo $row['tenbaiviet']?>" name="tenbaiviet" id="disabledTextInput" class="form-control"></td>
    </tr>
    <tr>
        <th scope="row">Hình ảnh</th>
        <td><input type="file" name="hinhanh" id="disabledTextInput" class="form-control">
        <img src="modules/quanlybaiviet/uploads/<?php echo $row['hinhanh'] ?> " width="150px" >
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
                    $sql_danhmuc="SELECT * FROM tbl_danhmucbaiviet ORDER BY id_baiviet DESC";
                    $query_danhmuc=mysqli_query($connect,$sql_danhmuc);
                    while($row_danhmuc=mysqli_fetch_array($query_danhmuc)){
                        if($row_danhmuc['id_baiviet']==$row['id_baiviet']){
                ?>
                
                <option value= "<?php echo $row_danhmuc['id_baiviet'];?>" selected><?php echo $row_danhmuc['tendanhmuc_baiviet']?></option>
                <?php
                        }else{
                        
                ?>
                <option value="<?php echo $row_danhmuc['id_baiviet']?>"><?php echo $row_danhmuc['tendanhmuc_baiviet']?></option>
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
          <select name="hienthi" id="disabledSelect" class="form-selecth" >
              <?php
                if($row['tinhtrang']==1){
              ?>
                <option value="1" selected>Kích hoạt</option>
                <option value="0">Ẩn</option>
                <?php
                }else{
                ?>
                <option value="1" >Kích hoạt</option>
                <option value="0" selected>Ẩn</option>
                <?php
                }
                ?>
          </select>
        </td>
    </tr>
    <tr>

        <td colspan="2"><input type="submit" value="Sửa bài viết" name="suabaiviet"></td>
    </tr>
    </form>
<?php
    }
?>
 </table>