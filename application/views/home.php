
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Chart Example</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">

</head>
<body>
<div class="container-fluid">
    <div class="row text-center p-2">
        <div class="col-sm-12">
            <h1 class="p-2">Chart Example with Codeigniter</h1>
        </div>
    </div>
    <div class="row">
        <div id="chart" class="col-sm-6" style="height: 300px;">
        </div>
        <div id="chart2" class="col-sm-6" style="height: 300px;">
        </div>
        <div id="chart3" class="col-sm-6" style="height: 300px;">
        </div>
        <div id="chart4" class="col-sm-6" style="height: 300px;">
        </div>
    </div>



</div>

<footer class="text-center p-2">
    <h5>Copyrigt &copy; <?php echo date("Y");?> | <a href="http://www.cagricagman.com">A.Çağrı ÇAĞMAN</a> </h5>
</footer>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
<script>

    Morris.Line({
        element: 'chart',
        data: [
            <?php
            foreach ($rows as $row) {
                $chart_data = "{ year:'" . $row->year . "', profit:" . $row->profit . ", purchase:" . $row->purchase . ", sale:" . $row->sale . "}, ";
                echo $chart_data;
            }
            ?>
        ],
        xkey: 'year',
        ykeys: ['profit', 'purchase', 'sale'],
        labels: ['Profit', 'Purchase', 'Sale'],
        hideHover: 'auto',
        stacked: true
    });
    Morris.Bar({
        element: 'chart2',
        data: [
            <?php
            foreach ($rows as $row) {
                $chart_data = "{ year:'" . $row->year . "', profit:" . $row->profit . ", purchase:" . $row->purchase . ", sale:" . $row->sale . "}, ";
                echo $chart_data;
            }
            ?>
        ],
        xkey: 'year',
        ykeys: ['profit', 'purchase', 'sale'],
        labels: ['Profit', 'Purchase', 'Sale'],
        hideHover: 'auto',
        stacked: false
    });
    Morris.Area({
        element: 'chart3',
        data: [
            <?php
            foreach ($rows as $row) {
                $chart_data = "{ year:'" . $row->year . "', profit:" . $row->profit . ", purchase:" . $row->purchase . ", sale:" . $row->sale . "}, ";
                echo $chart_data;
            }
            ?>
        ],
        xkey: 'year',
        ykeys: ['profit', 'purchase', 'sale'],
        labels: ['Profit', 'Purchase', 'Sale'],
        hideHover: 'auto',
        stacked: true
    });
    Morris.Bar({
        element: 'chart2',
        data: [
            <?php
            foreach ($rows as $row) {
                $chart_data = "{ year:'" . $row->year . "', profit:" . $row->profit . ", purchase:" . $row->purchase . ", sale:" . $row->sale . "}, ";
                echo $chart_data;
            }
            ?>
        ],
        xkey: 'year',
        ykeys: ['profit', 'purchase', 'sale'],
        labels: ['Profit', 'Purchase', 'Sale'],
        hideHover: 'auto',
        stacked: true
    });
</script>
</body>
</html>