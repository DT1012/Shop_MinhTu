<?php
    // GET id là lấy id từ bên MENU.php 
    $sql_baiviet ="SELECT * FROM tbl_baiviet WHERE tbl_baiviet.id_danhmuc='$_GET[id]' ORDER BY id DESC";
    $query_baiviet =mysqli_query($connect,$sql_baiviet);
   
    //get ten danh muc
    $sql_cate ="SELECT * FROM tbl_danhmucbaiviet WHERE tbl_danhmucbaiviet.id_baiviet='$_GET[id]' LIMIT 1";
    $query_cate =mysqli_query($connect,$sql_cate);
    $row_title =mysqli_fetch_array($query_cate);
?>
<?php
        include ("sidebar.php");
    ?>
<div class="main_danhmuc contanier">

    <h3 class="pt-5" style="text-align: center;"> Danh mục : 
        <?php 
                if(isset($row_title['tendanhmuc_baiviet'])){
                    echo $row_title['tendanhmuc_baiviet'];
                }else{
                    echo "lỗi không lấy được data";
                }
        ?>
    
    </h3>
    <ul class="product_list">
        <?php
            while($row_baiviet=mysqli_fetch_array($query_baiviet)){
        ?>
                        <li> 
                            <a href="index.php?quanly=baiviet&id=<?php echo $row_baiviet['id'] ?>">
                                <img src="admincp/modules/quanlybaiviet/uploads/<?php echo $row_baiviet['hinhanh'] ?>">
                                <p class="title_product">Tên bài viết:  <?php echo $row_baiviet['tenbaiviet'] ?></p>
                                <p class="derc" style="font-size: 14px;">Mô tả: <?php echo $row_baiviet['tomtat'] ?></p>
                            </a>
                        </li>
        <?php
            }
        ?>
                       
    </ul>
</div>
