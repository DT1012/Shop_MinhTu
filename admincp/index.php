<?php
    session_start();
    if(!isset($_SESSION['dangnhap'])){
        header('Location:login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_admin.css">
    <title>Admin</title>
    <link href="https://fonts.googleapis.com/css2?family=Inspiration&display=swap" rel="stylesheet">
    

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous" defer></script>

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <!-- đường dẫn đến file CSS của Morris.js -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" defer></script>
    <!-- đường dẫn đến thư viện jQuery -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js" defer></script>
    <!-- đường dẫn đến thư viện Raphael.js -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js" defer></script>
    <!-- đường dẫn đến thư viện Morris.js -->
    <script src="../js/morris.js" defer></script>
</head>
<body>
    <h3 class="d-flex justify-content-center pt-3 header_title">Welcome to Admin Page</h3>
    <div class="wrapper">
        <?php
        include("config/connect.php");
        include("modules/sidebar.php");
        include("modules/main.php");
        ?>
    </div>
    <script src="../js/ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('thongtinlienhe');
        CKEDITOR.replace('tomtat');
        CKEDITOR.replace('noidung');
        
    </script>
    <footer>
        <div class="footer">
            <p>CopyRight by DT 2023</p>
        </div>
    </footer>

</body>
</html>