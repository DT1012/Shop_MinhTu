    <?php
        $sql_lietke_nguoidung="SELECT * FROM tbl_dangky ORDER BY id_khachhang DESC";
        $result_lietke_nguoidung= mysqli_query($connect,$sql_lietke_nguoidung);
    ?>
    <h3>Danh sách người dùng</h3>
    <table class="table container">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name </th>
            <th scope="col">Account</th>
            <th scope="col">Email</th>
            <th scope="col">Number phone</th>
            <th scope="col">Address</th>
            <th scope="col" colspan="2"></th>
            <th scope="col">Chức vụ</th>
        </tr>
        </thead>
            <?php
                $i=0;
                while($row=mysqli_fetch_array($result_lietke_nguoidung)){
                $i++;
                
            ?>
         <tbody>   
        <tr>
            <th scope="row"> <?php echo $i ?></th>
            <td> <?php echo $row ['hovaten']?></td>
            <td> <?php echo $row ['taikhoan']?></td>
            <td> <?php echo $row ['email']?></td>
            <td> <?php echo $row ['sodienthoai']?></td>
            <td > <?php echo $row ['diachi']?></td>
            <td>
                    <a href="?action=quanlynguoidung&query=sua&idnguoidung=<?php echo $row['id_khachhang'] ?>"> Sửa </a>
            </td>
            <td>
                    <a href="modules/quanlynguoidung/xuly.php?idnguoidung=<?php echo $row['id_khachhang']?>">Xóa</a>
            </td>
            <td><?php if($row['chucvu']==1){
                echo "Bán hàng";
         }else{
                echo "Không";
         }?>
         </td>
        </tr>


            <?php
                }
            ?>
            </tbody>
    </table>
    