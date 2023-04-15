 <h3>Thống kê theo doanh thu</h3>
 <div id="chart"></div>
 <script>
    $(function() {
      var data = [
        { y: 'Tháng 1', a: 1000 },
        { y: 'Tháng 2', a: 2000 },
        { y: 'Tháng 3', a: 1500 },
        { y: 'Tháng 4', a: 3000 },
        { y: 'Tháng 5', a: 2500 },
        { y: 'Tháng 6', a: 4000 }
      ];

      Morris.Line({
        element: 'myChart',
        data: data,
        xkey: 'y',
        ykeys: ['a'],
        labels: ['Doanh thu theo tháng']
      });
    });
</script>