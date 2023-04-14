<?php
	if(isset($_POST['btnTimKiem'])){
        $keyword_sotientu = $_POST['keyword_sotientu'];
        $keyword_sotienden = $_POST['keyword_sotienden'];
    }
    $sql_tk = "SELECT * FROM tbl_sanpham WHERE giasanpham BETWEEN $keyword_sotientu AND $keyword_sotienden";
    $query_tk = mysqli_query($connect,$sql_tk);
    
?>
<?php
        include ("sidebar.php");
    ?>
<h3 class="pt-4">Từ khoá tìm kiếm : <?php echo "Giá từ: $keyword_sotientu đến $keyword_sotienden"; ?></h3>
<ul class="product_list">
    <?php
    if ($query_tk === false) {
        // Xử lý lỗi
        echo "Lỗi: " ;
    } else {
        while($row_tk = mysqli_fetch_array($query_tk)){ 
    ?>
    <li>
        <a href="index.php?quanly=sanpham&id=<?php echo $row_tk['id_sanpham'] ?>">
            <img src="admincp/modules/quanlysp/uploads/<?php echo $row_tk['hinhanh'] ?>">
            <p class="title_product mb-1" >Tên sản phẩm : <?php echo $row_tk['tensanpham'] ?></p>
            <p class="price_product" style="margin-bottom: 0.5rem;">Giá : <?php echo number_format($row_tk['giasanpham'],0,',','.').'vnđ' ?></p>
            <p style="font-size: 13px;"><?php echo $row_tk['tomtat'] ?></p>
        </a>
    </li>
    <?php
    } }
    ?>
</ul>