<div class="main d-flex" >
    <div class="maincontent ">  
     <?php //lấy qiamly từ menu truyền vào bằng phuongư thức GET
        if(isset($_GET['quanly'])){
            $bientam=$_GET['quanly'];
        }else{
            $bientam="";
        }
        if ($bientam=='danhmuclist'){
            include("main/danhmuc.php");
        }elseif ($bientam=='giohang'){ 
            include("main/giohang/cart.php");
        }elseif ($bientam=='vanchuyen'){ 
            include("main/thanhtoan/vanchuyen.php");
        }elseif ($bientam=='thongtinthanhtoan'){ 
            include("main/thanhtoan/thongtinthanhtoan.php");
        }elseif ($bientam=='chitietdonhang'){ 
            include("main/thanhtoan/chitietdonhang.php");
        }elseif ($bientam=='dangky'){ 
            include("main/dangky.php");
        }elseif ($bientam=='contact'){ 
            include("main/contact.php");
        }elseif ($bientam=='sanpham'){ 
            include("main/sanpham.php");
        }elseif ($bientam=='dangnhap'){ 
            include("main/dangnhap.php");
        }elseif ($bientam=='danhmucbaiviet'){ 
            include("main/danhmucbaiviet.php");
        }elseif ($bientam=='baiviet'){ 
            include("main/baiviet.php");
        }elseif ($bientam=='tintuc'){ 
            include("main/tintuc.php");
        }elseif ($bientam=='lichsudonhang'){ 
            include("main/lichsudonhang.php");
        }elseif ($bientam=='xemdonhang'){ 
            include("main/xemdonhang.php");
        }elseif ($bientam=='thongtin'){ 
            include("main/thongtin.php");
        }elseif ($bientam=='timkiem'){ 
            include("main/timkiem.php");
        }elseif ($bientam=='timkiemkhoanggia'){ 
            include("main/timkiemkhoanggia.php");
        }else{ ?>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
    <div class="carousel-inner silder">
        <div class="carousel-item active silder_img">
            <img src="images/1.jpg" class="d-block w-100 " alt="Ảnh Banner">
        </div>
        <div class="carousel-item silder_img">
            <img src="images/2.jpg" class="d-block w-100" alt="Ảnh Banner">
        </div>
        <div class="carousel-item silder_img">
            <img src="images/3.jpg" class="d-block w-100" alt="Ảnh Banner">
        </div>
        <div class="carousel-item silder_img">
            <img src="images/4.jpg" class="d-block w-100" alt="Ảnh Banner">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>
        <?php
            }
        ?>     
    </div>
</div>



