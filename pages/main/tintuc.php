<h1  style="text-align: center;">Bài viết mới nhất</h1>
<?php
    // GET id là lấy id từ bên MENU.php 
    $sql_bv ="SELECT * FROM tbl_baiviet where tinhtrang = 1 order by id desc";
    $query_bv = mysqli_query($connect,$sql_bv);
    
?>
<?php
        include ("sidebar.php");
?>
<div class="main_danhmuc container mt-5">
    <ul class="product_list">
        <?php
            while($row_bv = mysqli_fetch_array($query_bv)){
        ?>
            <li> 
                <a href="index.php?quanly=baiviet&id=<?php echo $row_bv['id'] ?>">
                    <img src="admincp/modules/quanlybaiviet/uploads/<?php echo $row_bv['hinhanh'] ?>" alt="lối">
                    <p class="title_product">Tên bài viết:  <?php echo $row_bv['tenbaiviet'] ?></p>
                    <div class="derc" style="font-size: 14px;"><b>Mô tả:</b><p><?php echo $row_bv['tomtat']?></p></div>
                </a>
            </li>
        <?php
            }
        ?>
                       
    </ul>
</div>
