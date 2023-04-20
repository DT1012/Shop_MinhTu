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
<div class="product-number">
    <?php     
       echo  getTotal("id_khachhang", "tbl_dangky", "count");
    ?>
    <p class="product-titel">Khách hàng</p>
</div>
<div class="product-number">
    <?php     
       echo  getTotal("code_cart", "tbl_cart_detail", "donhang");
    ?>
    <p class="product-titel">Đơn hàng</p>
</div>
<div class="product-number">
    <?php     
       echo  getTotal("soluong", "tbl_sanpham", "sum");
    ?>
    <p class="product-titel">Sản phẩm</p>
</div>
<div class="main-product">
    <div class="product-img">
        <img src="../image/luottruycap.png" alt="Anh" class="img" >
    </div>
    <div class="product-number">
        <?php
        $slq_2="SELECT * FROM tbl_luottruycap";
        $kq = mysqli_query($connect,$slq_2);
        $row = mysqli_fetch_array($kq);
        echo $row['count'];
        ?>
    </div>
    <p class="product-titel">Lượt truy cập</p>
</div>
