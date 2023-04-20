<style>
     .thongtin{
         width: 50%;
         height: 100%;
         border: 1px solid black;
         text-align: center;
         border-radius: 15px;
     }
 </style>
 
 <h3 class="p-3" style="text-align: center;">Thông tin cá nhân </h3>
<div class="thongtin container">
 <p><?php
        if(isset($_SESSION['dangky'])){
            echo 'Xin Chào: '.'<span style="color:red">'.$_SESSION['dangky'].'</span>';
            $id = $_SESSION['dangky'];
            $sql_thongtin ="SELECT * FROM tbl_dangky WHERE taikhoan='$id' LIMIT 1";
            $query_thongtin=mysqli_query($connect,$sql_thongtin);
            $row=mysqli_fetch_assoc($query_thongtin);
        }
            
 ?>       
  </p><br>
    <p>Họ và tên : <?php echo $row['hovaten']  ?></p>
    <p>Email : <?php echo $row['email']  ?></p>
    <p>Địa chỉ : <?php echo $row['diachi']  ?></p>
    <p>Số điện thoại : <?php echo $row['sodienthoai']  ?></p>
    


</div>