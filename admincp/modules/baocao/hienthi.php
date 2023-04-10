<?php
function getTotal($propName, $tableName, $key)
{
    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($servername, $username, $password, 'shop');

    $query = "";
    switch ($key) {
        case 'count':
            $query = " SELECT COUNT($propName) as 'quality' FROM $tableName";
            break;
        case 'sum':
            $query = " SELECT SUM($propName) as 'quality' FROM $tableName";
            break;
        default:
            return 0;
    }
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);
    $maSP = $row["quality"];
    return $maSP;
}
?>
<div class="product-number">
    <?php
    echo  getTotal("soLuongSP", "tbl_sanpham", "sum");
    ?>
</div>
<div class="main-product">
            <div class="product-img">

                <img src="../image/luottruycap.png" alt="Anh" class="img">

            </div>
            <div class="product-number">
                <?php
                echo $_SESSION['$luottruycap'];
                ?>
            </div>
            <p class="product-titel">Lượt truy cập</p>
        </div>