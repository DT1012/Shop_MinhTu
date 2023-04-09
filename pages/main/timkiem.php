<?php
	if(isset($_POST['timkiem'])){
		$tukhoa = $_POST['tukhoa'];
	}
	$sql_pro = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.tensanpham LIKE '%".$tukhoa."%'";
	$query_pro = mysqli_query($connect,$sql_pro);
	
?>
<?php
        include ("sidebar.php");
    ?>
<h3 class="pt-4">Từ khoá tìm kiếm : <?php echo $_POST['tukhoa']; ?></h3>
<ul class="product_list">
    <?php
    while($row = mysqli_fetch_array($query_pro)){ 
    ?>
    <li>
        <a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>">
            <img src="admincp/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>">
            <p class="title_product mb-1" >Tên sản phẩm : <?php echo $row['tensanpham'] ?></p>
            <p class="price_product" style="margin-bottom: 0.5rem;">Giá : <?php echo number_format($row['giasanpham'],0,',','.').'vnđ' ?></p>
            <p style="font-size: 13px;"><?php echo $row['tomtat'] ?></p>
        </a>
    </li>
    <?php
    } 
    ?>
</ul>