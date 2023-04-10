<?php
// function getTotal($propName, $tableName, $key)
// {
//     $servername = "localhost";
//     $username = "root";
//     $password = "";

//     $conn = mysqli_connect($servername, $username, $password, 'shop');

//     $query = "";
//     switch ($key) {
//         case 'count':
//             $query = " SELECT COUNT($propName) as 'quality' FROM $tableName";
//             break;
//         case 'sum':
//             $query = " SELECT SUM($propName) as 'quality' FROM $tableName";
//             break;
//         default:
//             return 0;
//     }
//     $result = mysqli_query($conn, $query);
//     $row = mysqli_fetch_array($result);
//     $maSP = $row["quality"];
//     return $maSP;
// }
?>
<div class="product-number">
    
</div>
<div class="main-product">
            <div class="product-img">

                <img src="../image/luottruycap.png" alt="Anh" class="img">

            </div>
            <div class="product-number">
                <?php
                $slq_2="select * from tbl_luottuycap";
                $kq = mysqli_query($connect,$slq_2);
                $row = mysqli_fetch_assoc($kq);
                echo $row['count'];
                ?>
            </div>
            <p class="product-titel">Lượt truy cập</p>
        </div>