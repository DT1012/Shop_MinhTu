<?php
function getTotal($propName, $tableName, $key)
{
    $servername = "localhost";
    $username = "root";
    $password = "";

    $connect = mysqli_connect($servername, $username, $password, 'shop');

    $query = "";
    switch ($key) {
        case 'count':
            $query = "SELECT COUNT($propName) as 'quality' FROM $tableName";
            break;
        case 'donhang':
            $query = "SELECT COUNT(DISTINCT $propName) as 'quality' FROM $tableName ";
            break;
        case 'sum':
            $query = " SELECT SUM($propName) as 'quality' FROM $tableName";
            break;
        default:
            return 0;
    }
    $result = mysqli_query($connect, $query);
    
    $row = mysqli_fetch_assoc($result);
    $maSP = $row["quality"];
    return $maSP;
}
?>
<h3>Thống kê theo doanh thu: <span id="text-date"></span></h3>
<p>
    <select name="" id="" class="select-date">
        <option value="7ngay">7 ngày </option>
        <option value="28ngay">28 ngày </option>
        <option value="90ngay">90 ngày </option>
        <option value="365ngay">365 ngày </option>
    </select>
</p>
<div id="chart"></div>

<div class="main-product row">
<div class="col">
    <p style="font-size: 30px;">

    <?php     
       echo  getTotal("id_khachhang", "tbl_dangky", "count");
    ?> <i class="fa-sharp fa-solid fa-user ms-4"></i>
    </p>
    <h5 class="product-titel">Khách hàng</h5>
</div>
<div class="col ">
<p style="font-size: 30px;">
    <?php     
       echo  getTotal("code_cart", "tbl_cart_detail", "donhang");
    ?>
    <i class="fa-sharp fa-solid fa-cart-shopping ms-3"></i>
</p>
    <h5 class="product-titel">Đơn hàng</h5>
</div>
<div class="col">
<p style="font-size: 30px;">
    <?php     
       echo  getTotal("soluong", "tbl_sanpham", "sum");
    ?>
    <i class="fa-brands fa-product-hunt ms-3"></i>
</p>
    <h5 class="product-titel">Sản phẩm</h5>
</div>
<div class="col">
<p style="font-size: 30px;">
    <?php     
       echo  getTotal("id", "tbl_baiviet", "count");
    ?>
    <i class="fa-regular fa-pen-to-square ms-3"></i>
</p>
    <h5 class="product-titel">Bài viết</h5>
</div>
    <div class="col">
<p style="font-size: 30px;">
        <?php
        $slq_2="SELECT * FROM tbl_luottruycap";
        $kq = mysqli_query($connect,$slq_2);
        $row = mysqli_fetch_array($kq);
        echo $row['count'];
        ?>
        <i class="fa-brands fa-accessible-icon ms-4"></i>
</p>
    <h5 class="product-titel">Lượt truy cập</h5>
    </div>
    <div class="col">
    <p style="font-size: 30px;">

        <?php
        // echo implode($_SESSION['eamil']);
        if(isset($_SESSION['email']) ){
            if(is_countable($_SESSION['email'])){
                echo "Số lượt đang truy cập " . count($_SESSION['email']);
            }
            else{
                $dangtruycap = explode(",",$_SESSION['email']);
                echo count($dangtruycap);
                echo"<h5>Số lượt đang truy cập</h5> "  ;
            }
        }else{
            echo "<h5>Hiện không có lượt truy cập nào</h5>";
        }
        ?>
    </p>
    </div>
    
</div>
