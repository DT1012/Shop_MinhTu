<?php
    include "../../config/connect.php";
    $tenbaiviet=$_POST['tenbaiviet'];
    
     //xử lý hình anh
    $file=$_FILES['hinhanh'];
    $hinhanh=$file['name'];
    $hinhanh_tmp=$_FILES['hinhanh']['tmp_name'];
    $hinhanhgio=time().'_'.$hinhanh;
    
    $tomtat = $_POST['tomtat'];
    $noidung=$_POST['noidung'];
    $hienthi=$_POST['hienthi'];
    $danhmuc=$_POST['danhmuc'];
    
    if(isset($_POST['thembaiviet'])){
        if(isset($_FILES['hinhanh'])){
            if($file['type']== 'image/jpeg'||$file['type']== 'imgae/jpg'||$file['type']== 'image/png'){
                
                move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
                
                $sql_thembaiviet="INSERT INTO tbl_baiviet(tenbaiviet,hinhanh,tomtat,noidung,tinhtrang,id_danhmuc) 
                VALUE ('".$tenbaiviet."','".$hinhanh."','".$tomtat."','".$noidung."',".$hienthi.",'".$danhmuc."')";
                mysqli_query($connect,$sql_thembaiviet);
                header('Location:../../index.php?action=quanlybaiviet&query=them');
        
            }else{
                $hinhanh='';
                header('Location:../../index.php?action=quanlybaiviet&query=them');
            }
        }
    }elseif(isset($_POST['suabaiviet'])){
        if($hinhanh!=''){
            move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
            $sql_sua="UPDATE tbl_baiviet SET tenbaiviet='".$tenbaiviet."',hinhanh='".$hinhanh."',
            tomtat='".$tomtat."',noidung='".$noidung."',tinhtrang='".$hienthi."',id_danhmuc='".$danhmuc."' WHERE id='$_GET[idbaiviet]'";
            
            $sql="SELECT*FROM tbl_baiviet WHERE id='$_GET[idbaiviet]' LIMIT 1";
            $query=mysqli_query($connect,$sql);
            while($row=mysqli_fetch_array($query)){
                unlink('uploads/'.$row['hinhanh']);
            }
        
        }else{
            $sql_sua="UPDATE tbl_baiviet SET tenbaiviet='".$tenbaiviet."',tomtat='".$tomtat."',
            noidung='".$noidung."',tinhtrang='".$hienthi."',id_danhmuc='".$danhmuc."' WHERE id='$_GET[idbaiviet]'";
        }  
        mysqli_query($connect,$sql_sua);
        header('Location:../../index.php?action=quanlybaiviet&query=them');
    }
    
    
    
    
    else{
        
        $id=$_GET['idbaiviet'];
        $sql="SELECT *FROM tbl_baiviet WHERE id = '$id' LIMIT 1";
        $query=mysqli_query($connect,$sql);
        while($row=mysqli_fetch_array($query)){
            unlink('uploads/'.$row['hinhanh']);
        }
        $sql_xoa="DELETE FROM tbl_baiviet WHERE id ='".$id."';";
        mysqli_query($connect,$sql_xoa);
        header('Location:../../index.php?action=quanlybaiviet&query=them');
    }
?>