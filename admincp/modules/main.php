<div class="clear"></div>
<div class="main p-3">

<?php 
                        
                        if(isset($_GET['action']) && $_GET['query']){                        
                            $bientam=$_GET['action'];
                            $query =$_GET['query'];
                        }else{
                            $bientam='';
                            $query='';
                        }
                        if ($bientam=='quanlydanhmucsanpham' && $query=='them'){
                            include("modules/quanlydanhmucsp/them.php");
                            include("modules/quanlydanhmucsp/lietke.php");

                        }elseif($bientam=='quanlydanhmucsanpham' && $query=='sua'){
                            include("modules/quanlydanhmucsp/sua.php");

                        }
                        elseif($bientam=='baocao' && $query=='hienthi'){
                            include("modules/baocao/hienthi.php");

                        }elseif($bientam=='quanlysanpham' && $query=='them'){
                            include("modules/quanlysp/them.php");
                            include("modules/quanlysp/lietke.php");

                        }elseif($bientam=='quanlysanpham' && $query=='sua'){
                            include("modules/quanlysp/sua.php");

                        }elseif($bientam=='quanlynguoidung' && $query=='them' ){
                            include("modules/quanlynguoidung/lietke.php");
                            
                        }elseif($bientam=='quanlynguoidung' && $query=='sua'){
                            include("modules/quanlynguoidung/sua.php");
                            
                        }elseif($bientam=='quanlydonhang' && $query=='them' ){
                            include("modules/quanlydonhang/lietke.php");
                            
                        }elseif($bientam=='quanlydonhang' && $query=='sua'){
                            include("modules/quanlydonhang/sua.php");
                            
                        }elseif($bientam=='quanlydonhang' && $query=='xemdonhang'){
                            include("modules/quanlydonhang/xemdonhang.php");                            
                        }
                        elseif($bientam=='quanlydanhmucbaiviet' && $query=='them'){
                            include("modules/quanlydanhmucbaiviet/them.php");
                            include("modules/quanlydanhmucbaiviet/lietke.php");               
                        }elseif($bientam=='quanlydanhmucbaiviet' && $query=='sua'){
                            include("modules/quanlydanhmucbaiviet/sua.php");
                            
                        }elseif($bientam=='quanlybaiviet' && $query=='them'){
                            include("modules/quanlybaiviet/them.php");
                            include("modules/quanlybaiviet/lietke.php");
                        }elseif($bientam=='quanlybaiviet' && $query=='sua'){
                            include("modules/quanlybaiviet/sua.php");   
                        }elseif($bientam=='quanlyweb' && $query=='capnhat'){
                            include("modules/thongtinweb/quanly.php");   
                        }
                        elseif($bientam=='dangxuat'){
                            include("../login.php");
                        }
                        else{
                            include("modules/baocao/hienthi.php");
                        }
                    ?>
</div>