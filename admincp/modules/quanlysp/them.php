<h3>Thêm sản phẩm</h3>
 <table class="table container">
   <form method="POST" action="modules/quanlysp/xuly.php" enctype="multipart/form-data">
   <fieldset disabled>
    <tr>
        <th colspan="2">Điền sản phẩm</th>
    </tr>
    <tr>
        <th scope="row">Tên sản phẩm</th>
        <td><input type="text" name="tensanpham"  id="disabledTextInput" class="form-control" placeholder="Tên sản phẩm"></td>
    </tr>
    <tr>
        <th scope="row">Mã sản phẩm</th>
        <td><input type="text" name="masp" id="disabledTextInput" class="form-control" placeholder="Mã sản phẩm"></td>
    </tr>
    <tr>
        <th scope="row">Giá</th>
        <td><input type="number" name="giasp" id="disabledTextInput" class="form-control" placeholder="Giá sản phẩm"></td>
    </tr>
    <tr>
        <th scope="row">Số lượng</th>
        <td><input type="number" name="soluong" id="disabledTextInput" class="form-control" placeholder="Số lượng sản phẩm"></td>
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
        <th scope="row">Danh mục sản phẩm</th>
        <td>
          <select name="danhmuc" id="disabledSelect" class="form-select">
                <?php
                    $sql_danhmuc="SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
                    $query_danhmuc=mysqli_query($connect,$sql_danhmuc);
                    while($row_danhmuc=mysqli_fetch_array($query_danhmuc)){
                ?>
                <!--dùng value thêm danh mục dựa vào địa chỉ id_danhmuc -->
                <option value="<?php echo $row_danhmuc['id_danhmuc']?>"><?php echo $row_danhmuc['tendanhmuc']?></option>
            

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
                <option value="1">Mới</option>
                <option value="0">Cũ</option>
          </select>
        </td>
    </tr>
    <tr>

        <td colspan="2"><input type="submit" value="Thêm sản phẩm" name="themsanpham"></td>
    </tr>
    </fieldset>
</form>
 </table>