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
        <a class="navbar-brand" href="index.php">หน้าแรก</a>
        <a class="navbar-brand" href="Contect.php">ข้อมูลดิน</a>
        <a class="navbar-brand" href="About.php">การวิเคราะห์ในการเพาะปลูก</a>
        <a class="navbar-brand mb-0 h1" href="#">ผลวิเคราะห์ในการเพาะปลูก</a>       
    </nav>
        <div class="jumbotron">
            <div class="container">
            <h3 class="text-center"> ผลวิเคราะห์ในการเพาะปลูก </h3>
                <div class="row">
                    <div class="col-sm-4">     
                        <div class="card">
                            <div class="card-body">
                                <p> จังหวัดในการเพาะปลูก : <?php echo $_POST["Province"]."<br>"; echo "<hr>";?> </p>
                                <p> อำเภอในการเพาะปลูก : <?php echo $_POST["District"]."<br>"; echo "<hr>";?> </p>
                                <p> ตำบลในการเพาะปลูก : <?php echo $_POST["SubDistrict"]."<br>"; echo "<hr>";?> </p>
                                <p> ขนาดพื้นที่ในการเพาะปลูก : <?php echo $_POST["size"] ."&nbsp;&nbsp;ไร่"; echo "<hr>";?> </p>
                            </div>
                        </div> 
                    </div>  
                    <div class="col-sm-8">
                        <div class="card">
                            <div class="card-body text-center">
                                <img src="uploads/2.jpg" alt="Logo" style="width:50%;">
                            </div>
                        </div> 
                    </div> 
                </div>
                <div class="card">
                    <div class="card-body">
                        <table width="1000" border="1" align="center" bordercolor="#666666">
                            <tr>
                                <th width="15"> <div align="center">ชุดดิน </div></th>
                                <th width="100"> <div align="center">ชื่อชุดดิน </div></th>
                                <th width="80"> <div align="center">สภาพพื้นที่ </div></th>
                                <th width="50"> <div align="center">การระบายน้ำ </div></th>
                                <th width="220"> <div align="center">แนวทางการดูแล </div></th>
                                <th width="100"> <div align="center">เหมาะแก่การปลูกพืช </div></th>
                            </tr> 
                            <?php
                                //connect db
                                include("connect.php");
                                $sql = "SELECT * FROM `soil` WHERE `province_name` LIKE '%".$_POST["Province"]."%'  AND `district_name` LIKE '%".$_POST["District"]."%' AND `subdis_name` LIKE '%".$_POST["SubDistrict"]."%' AND `size` LIKE '%".$_POST["size"]."%' ORDER BY `id` ASC";
                                $result = mysqli_query($conn, $sql);
                                while($row = mysqli_fetch_array($result))
                                {
                                    echo "<tr>";
                                    echo "<td align='center'>" . $row["soil_id"] . "</td>";
                                    echo "<td align='center'>" . $row["soil_name"] . "</td>";
                                    echo "<td align='center'>" . $row["area"] . "</td>";
                                    echo "<td align='center'>" . $row["drainage"] . "</td>";
                                    echo "<td align='center'>" . $row["care"] . "</td>";
                                    echo "<td align='center'>" . $row["plant"] . "</td>";
                                    echo "</tr>";
                                }
                                ?> 
                        </table>
                    </div>
                </div>
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