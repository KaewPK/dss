<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ระบบการสนับสนุนการเพาะปลูก</title>
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">   
        <a class="navbar-brand" href="#"><img src="uploads/icon.png" alt="Logo" style="width:80px;"></a>    
        <a class="navbar-brand mb-0 h1" href="index.php">หน้าแรก</a>
        <a class="navbar-brand" href="Contect.php">ข้อมูลดิน</a>
        <a class="navbar-brand" href="About.php">การวิเคราะห์ในการเพาะปลูก</a>
        <a class="navbar-brand" href="Analysis.php">ผลวิเคราะห์ในการเพาะปลูก</a>       
    </nav>

    <div id="carouselExampleIndicators" class="carousel slide bg-secondary" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active"><img src="uploads/1.jpg" class="rounded mx-auto d-block" style="width:50%"></div>
            <div class="carousel-item"><img src="uploads/2.jpg" class="rounded mx-auto d-block" style="width:42%"></div>
            <div class="carousel-item"><img src="uploads/3.jpg" class="rounded mx-auto d-block" style="width:42%"></div>
            <div class="carousel-item"><img src="uploads/4.jpg" class="rounded mx-auto d-block" style="width:42%"></div>
            <div class="carousel-item"><img src="uploads/5.jpg" class="rounded mx-auto d-block" style="width:50%"></div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <div class="jumbotron">
            <div class="container text-center">
                <h3 class="display-4o"> ระบบการสนับสนุนการเพาะปลูก </h3>
                <p class="lead"> ในการนำมาวิเคราะห์และวางแผนการเพาะปลูกในแต่ละพื้นที่ในภาคตะวันออกเฉียงเหนือ </p>
            </div>
        </div>
    </div>  

    <script src ="node_modules/jquery/dist/jquery.min.js"></script>
    <script src ="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src ="node_modules/popper.js/dist/umd/popper.min.js"></script>

</body>
<footer class="page-footer text-white font-small text-color-while pt-2 bg-dark">
    <div class="footer-copyright text-center py-3">© 2019 Copyright: Project Team</div>
</footer>
</html>