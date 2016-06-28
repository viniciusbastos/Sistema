<html>
<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {

            var data = google.visualization.arrayToDataTable([
                ['Task', 'Hours per Day', 'huo'],
                ['Work',     11, 9],
                ['Eat',      2, 7],
                ['Commute',  2, 6],
                ['Watch TV', 2, 6],
                ['Sleep',    7, 6]
            ]);

            var options = {
                title: 'My Daily Activities'
            };

            var chart = new google.visualization.LineChart(document.getElementById('piechart'));

            chart.draw(data, options);
        }

        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart2);
        function drawChart2() {

            var data2 = google.visualization.arrayToDataTable([
                ['Task', 'Hours per Day', 'huo'],
                ['Work',     11, 9],
                ['Eat',      2, 7],
                ['Commute',  2, 6],
                ['Watch TV', 2, 6],
                ['Sleep',    7, 6]
            ]);

            var options = {
                title: 'My Daily Activities'
            };

            var chart2 = new google.visualization.PieChart(document.getElementById('piechart2'));

            chart2.draw(data2, options2);
        }
    </script>
</head>
<body>
<div id="piechart" style="width: 900px; height: 500px;"></div>
<footer id="piechart2" style="width: 900px; height: 500px;"></footer>

</body>
</html>





</body>
</html>

