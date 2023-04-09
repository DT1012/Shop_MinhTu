<div class="sidebar">
    <ul class="list-group">
        <?php
            $sql_danhmuc="SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
            $query_danhmuc=mysqli_query($connect,$sql_danhmuc);
            while ($row=mysqli_fetch_array($query_danhmuc)){

        ?>
        <li class="list-group-item sidebar_bg"><a class="sidebar_link" href="index.php?quanly=danhmuclist&id=<?php echo $row['id_danhmuc'] ?>"><?php echo $row['tendanhmuc']?></a></li>
        <?php

            }
            ?>
    </ul>
</div>