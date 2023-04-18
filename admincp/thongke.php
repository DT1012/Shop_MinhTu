<?php
    require('../admincp/config/connect.php');
    require('../../carbon/autoload.php');
    
    use Carbon\Carbon;
    use Carbon\CarbonInterval;

    if(isset($_POST['thoigian'])){
        $thoigian = $_POST['thoigian'];
    }else{
        $thoigian = '';
        $subdays = Carbon::now('Asia/Ho_Chi_Minh')->subDays(365)->toDateString();
    }

    if($thoigian == '7ngay'){
        $subdays = Carbon::now('Asia/Ho_Chi_Minh')->subDays(7)->toDateString();
    }elseif($thoigian == '28ngay'){
        $subdays = Carbon::now('Asia/Ho_Chi_Minh')->subDays(28)->toDateString();
    }elseif($thoigian == '90ngay'){
        $subdays = Carbon::now('Asia/Ho_Chi_Minh')->subDays(90)->toDateString();
    }elseif($thoigian == '365ngay'){
        $subdays = Carbon::now('Asia/Ho_Chi_Minh')->subDays(365)->toDateString();
    }
    $now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
    $sql="SELECT * FROM tbl_thongke Where ngaydat Between '$subdays' And '$now' Order by ngaydat ASC";
    $sql_query = mysqli_query($connect,$sql);
    while($val = mysqli_fetch_array($sql_query)){
        $chart_data[] = array(
            'date'=> $val['ngaydat'],
            'order' => $val['donhang'],
            'sales'=>$val['doanhthu'],
            'quantity'=>$val['soluongban']
        );
    }
    echo $data = json_encode($chart_data);
?>