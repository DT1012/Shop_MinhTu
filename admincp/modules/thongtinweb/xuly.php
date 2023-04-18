<?php
    include "../../config/connect.php";
    $thongtinlienhe=$_POST['thongtinlienhe'];
    $id = $_GET['id'];
    
    if(isset($_POST['submitlienhe'])){
        $sql_sua="UPDATE tbl_lienhe SET thongtinlienhe ='".$thongtinlienhe."' WHERE id='$id'";
        mysqli_query($connect,$sql_sua);
        header('Location:../../index.php?action=quanlyweb&query=capnhat');
    }
?>