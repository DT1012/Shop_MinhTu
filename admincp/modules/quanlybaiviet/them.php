<h3>Thêm bài viết</h3>
 <table class="table container">
   <form method="POST" action="modules/quanlybaiviet/xuly.php" enctype="multipart/form-data">
   <fieldset disabled>
    <tr>
        <th colspan="2">Điền bài viết</th>
    </tr>
    <tr>
        <th scope="row">Tên bài viết</th>
        <td><input type="text" name="tenbaiviet"  id="disabledTextInput" class="form-control" placeholder="Tên bài viết"></td>
    </tr>
    <tr>
        <th scope="row">Hình ảnh</th>
        <td><input type="file" name="hinhanh" id="disabledTextInput" class="form-control"></td>
        
    </tr>
    <tr>
        <th scope="row">Tóm tắt</th>
        <td> <textarea name="tomtat"   id="disabledTextInput" class="form-control"></textarea> </td>
    </tr>
    <tr>
        <th scope="row">Nội dung</th>
        <td> <textarea name="noidung"  id="disabledTextInput" class="form-control"></textarea> </td>
    </tr>
    <tr>
        <th scope="row">Danh mục bài viết</th>
        <td>
          <select name="danhmuc" id="disabledSelect" class="form-select">
                <?php
                    $sql_danhmuc="SELECT * FROM tbl_danhmucbaiviet ORDER BY id_baiviet DESC";
                    $query_danhmuc=mysqli_query($connect,$sql_danhmuc);
                    while($row_danhmuc=mysqli_fetch_array($query_danhmuc)){
                ?>
                <!--dùng value thêm danh mục dựa vào địa chỉ id_danhmuc -->
                <option value="<?php echo $row_danhmuc['id_baiviet']?>"><?php echo $row_danhmuc['tendanhmuc_baiviet']?></option>
            

                <?php
                    }
                ?>
          </select>
        </td>
    </tr>
    <tr>
        <th scope="row">Tình trạng </th>
        <td>
          <select name="hienthi" id="disabledSelect" class="form-select">
                <option value="1">Kích hoạt</option>
                <option value="0">Ẩn</option>
          </select>
        </td>
    </tr>
    <tr>
        <td colspan="2"><input type="submit" value="Thêm bài viết" name="thembaiviet"></td>
    </tr>
    </fieldset>
</form>
 </table>