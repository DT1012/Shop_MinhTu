
<?php
    // GET id là lấy id từ bên MENU.php 
    $sql_bv ="SELECT * FROM tbl_baiviet WHERE tbl_baiviet.id_danhmuc='$_GET[id]' ORDER BY id DESC";
    $query_bv = mysqli_query($connect,$sql_bv);
    
    //get ten danh muc
    $sql_cate ="SELECT * FROM tbl_danhmucbaiviet WHERE tbl_danhmucbaiviet.id_baiviet='$_GET[id]' LIMIT 1";
    $query_cate =mysqli_query($connect,$sql_cate);
    $row_title =mysqli_fetch_array($query_cate);
?>
<?php
        include ("sidebar.php");
?>
<div class="main_danhmuc contanier">

    <h3 class="pt-5" style="text-align: center;"> Danh mục bài viết : 
        <?php 
         echo $row_title['tendanhmuc_baiviet'];
        ?>
    
    </h3>
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
