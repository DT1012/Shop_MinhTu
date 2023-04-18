<?php
    $sql_ttlh="SELECT * FROM tbl_lienhe WHERE id=1";
    $result_ttlh= mysqli_query($connect,$sql_ttlh);
?>
<h3>Quản lý thông tin Website</h3>
<table class="table container">
        <?php
            while($dong = mysqli_fetch_array($result_ttlh)){
        ?>
    <form action="modules/thongtinweb/xuly.php?id=<?php echo $dong['id'] ?>" method="post" enctype="multipart/form-data">
        <tr>
            <td >Thông tin liên hệ</td>
            <td><textarea name="thongtinlienhe" style="resize: none"><?php echo $dong['thongtinlienhe'] ?></textarea></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="submitlienhe" value="Cập nhật"></td>
        </tr>
        <?php

            }
        ?>
    </form>
</table>