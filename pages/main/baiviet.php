<?php
    // GET id là lấy id từ bên MENU.php 
    $sql_bv ="SELECT * FROM tbl_baiviet WHERE tbl_baiviet.id='$_GET[id]' ORDER BY id DESC";
    $query_bv = mysqli_query($connect,$sql_bv);
    
    
?>
<div class="container clearfix">
    <?php
        while($row_bv = mysqli_fetch_array($query_bv)){

        ?>
    <h3 class="pt-5" style="text-align: center;"> Bài viết :

        <?php 
         echo $row_bv['tenbaiviet'];
        ?>
    
    </h3>
    <div class="baiviet">      
        <img src="admincp/modules/quanlybaiviet/uploads/<?php echo $row_bv['hinhanh'] ?>" alt="lối" style="float: left; width: 550px; padding-right: 30px; margin-top: 20px;">         
        <p class="derc" style="font-size: 16px;"><?php echo $row_bv['noidung']?></p>                  
    </div>
    <?php
}
?>
</div>
