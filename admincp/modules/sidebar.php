<div class="sidebar">
<div class="logo">
    <p>Shop <span class="minhtu">Minh Tú</span> </p>
    <p class="derc">Tổ ấm của người tinh tế</p>
</div>
<ul class="admincp_list">
    
    <li><a href="index.php?action=quanlysanpham&query=them">Quản lý sản phẩm </a></li>

    <?php
        if(isset($_SESSION['dangnhap'])){
            if($_SESSION['dangnhap']=='admin'){
    ?>
        <li><a href="index.php?action=quanlydanhmucsanpham&query=them">Quản lý danh mục sản phẩm </a></li>
        <li><a href="index.php?action=quanlynguoidung&query=them">Quản lý người dùng</a></li>
        
    <?php

            }
       }
    
    ?>
    <li><a href="index.php?action=quanlydonhang&query=them">Quản lý đơn hàng </a></li>
    <li><a href="index.php?action=quanlydanhmucbaiviet&query=them">Quản lý bài viết </a></li>
    <li><a href="index.php?action=quanlybaiviet&query=them">Bài viết </a></li>
    <li><a href="index.php?action=quanlyweb&query=capnhat">Quản lý Thông tin website</a></li>
    <li><a href="index.php?action=baocao&query=hienthi">Báo cáo</a></li>
    <li><a href="http://localhost/Shop/">Home </a></li>

</ul>
<?php
	if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
		unset($_SESSION['dangnhap']);
		header('Location:login.php');
	}
?>
<p class="user"><a href="index.php?dangxuat=1">Đăng xuất : <?php if(isset($_SESSION['dangnhap'])){
		echo $_SESSION['dangnhap'];

	} ?></a></p>
</div>