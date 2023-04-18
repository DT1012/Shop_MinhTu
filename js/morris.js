$(document).ready(function() {
    thongke();
    var char = new Morris.Area({
        // ID of the element in which to draw the chart.
        element: 'chart',
        // Chart data records -- each entry in this array corresponds to a point on
        // the chart.

        // The name of the data record attribute that contains x-values.
        xkey: 'date',
        // A list of names of data record attributes that contain y-values.
        ykeys: ['order', 'sales', 'quantity'],
        // Labels for the ykeys -- will be displayed when you hover over the
        // chart.
        labels: ['Đơn hàng', 'Doanh thu', 'Số lượng bán ra']

    });
    $('.select-date').change(function() {
        var thoigian = $(this).val();
        if (thoigian == "7ngay") {
            var text = '7 ngày qua';
        } else if (thoigian == '28ngay') {
            var text = '28 ngày qua';
        } else if (thoigian == '90ngay') {
            var text = '90 ngày qua';
        } else {
            var text = '365 ngày qua';
        }
        $.ajax({
            url: "modules/thongke.php",
            method: "POST",
            dataType: "JSON",
            data: { thoigian: thoigian },
            success: function(data) {
                char.setData(data);
                $('#text-date').text(text);
            }
        });
    })

    function thongke() {
        var text = "365 ngày qua";
        $.ajax({
            url: "modules/thongke.php",
            method: "POST",
            dataType: "JSON",

            success: function(data) {
                char.setData(data);
                $('#text-date').text(text);
            }
        });
    }

});