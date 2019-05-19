<html lang="pl">
<head>
    <title>Rejestr logów</title>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/chart.js@2.8.0/dist/Chart.css">
    <link rel="shortcut icon" href="pliki/deadpool-clipart-ico-16.png"/>
    <link rel="stylesheet" href="css/main.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0/dist/Chart.bundle.min.js"></script>
</head>
<body>
<section id="inf_wst_sec">
    <div class="container">
        <div class="row">
            <input type="button" onclick="addData(liniowy1, {x: 60,y: 10})">
            <input type="button" onclick="addData(liniowy1, {x: 70,y: 5})">
            <input type="button" onclick="addData(liniowy1, {x: 80,y: 7})">
            <input type="button" onclick="addData(liniowy1, {x: 90,y: 8})">
            <input type="button" onclick="addData(liniowy1, {x: 100,y: 10})">
            <input type="button" onclick="addData(liniowy1, {x: 110,y: 20})">
            <input type="button" onclick="addData(liniowy1, {x: 120,y: 15})">
            <input type="button" onclick="addData(liniowy1, {x: 130,y: 12})">
            <input type="button" onclick="addData(liniowy1, {x: 140,y: 10})">
            <input type="button" onclick="addData(liniowy1, {x: 150,y: 30})">
            <input type="button" onclick="addData(liniowy1, {x: 160,y: 5})">
            <input type="button" onclick="addData(liniowy1, {x: 180,y: 4})">
            <input type="button" onclick="addData(liniowy1, {x: 190,y: 7})">
            <input type="button" onclick="addData(liniowy1, {x: 2000,y: 10})">
            <input type="button" onclick="console.log(get_avr(liniowy1));">
        </div>
    </div>
</section>
<section id="chart_sec">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <canvas id="myChart1" width="" height="200"></canvas>
            </div>
            <div class="col-md-6">
                <canvas id="myChart2" width="" height="200"></canvas>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <canvas id="myChart3" width="" height="200"></canvas>
            </div>
            <div class="col-md-6">
                <canvas id="myChart4" width="" height="200"></canvas>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <canvas id="myChart5" width="" height="200"></canvas>
            </div>
            <div class="col-md-6">
                <canvas id="myChart6" width="" height="200"></canvas>
            </div>
        </div>
    </div>
</section>
<!--////////////////////////////////////////////////////////////////////////////////////////////-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<script src="js/main.js"></script>
</body>
</html>