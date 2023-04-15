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
            $query = "SELECT COUNT($propName) as 'quality' FROM $tableName group by $propName";
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
<h3>Thống kê theo doanh thu</h3>
 <div id="chart"></div>
 <script>
    new Morris.Line({
  // ID of the element in which to draw the chart.
  element: 'myfirstchart',
  // Chart data records -- each entry in this array corresponds to a point on
  // the chart.
  data: [
    { year: '2008', value: 20 },
    { year: '2009', value: 10 },
    { year: '2010', value: 5 },
    { year: '2011', value: 5 },
    { year: '2012', value: 20 }
  ],
  // The name of the data record attribute that contains x-values.
  xkey: 'year',
  // A list of names of data record attributes that contain y-values.
  ykeys: ['value'],
  // Labels for the ykeys -- will be displayed when you hover over the
  // chart.
  labels: ['Value']
});
</script>
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
