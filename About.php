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

    <div class="jumbotron">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
            <h2 class="text-center"> ข้อมูลสารสนเทศทรัพยากรดินรายจังหวัด </h2> <br>
            <div class="card">
                <div class="card-body">
                <h4> ค้นหาข้อมูล </h4> <br>
                <form action="Analysis.php" method="post" >
                    <div class="row">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-6"> 
                            <p> จังหวัดในการเพาะปลูก &nbsp;&nbsp;&nbsp;&nbsp; <select name = "Province" id = "Province" onChange = "ListDistrict(this.value)">
                                <option value = "" selected = "selected"> -----โปรดเลือกจังหวัด----- </option>
                                <option value = "กาฬสินธุ์"> กาฬสินธุ์ </option>      
                                <option value = "ขอนแก่น"> ขอนแก่น </option>
                                <option value = "ชัยภูมิ"> ชัยภูมิ </option>            
                                <option value = "นครพนม"> นครพนม </option>
                                <option value = "นครราชสีมา"> นครราชสีมา </option>   
                                <option value = "บึงกาฬ"> บึงกาฬ </option>
                                <option value = "บุรีรัมย์"> บุรีรัมย์ </option>           
                                <option value = "มหาสารคาม"> มหาสารคาม </option>
                                <option value = "มุกดาหาร"> มุกดาหาร </option>       
                                <option value = "ยโสธร"> ยโสธร </option>
                                <option value = "ร้อยเอ็ด"> ร้อยเอ็ด </option>          
                                <option value = "เลย"> เลย </option>
                                <option value = "ศรีสะเกษ"> ศรีสะเกษ </option>        
                                <option value = "สกลนคร"> สกลนคร </option>
                                <option value = "สระแก้ว"> สระแก้ว </option>          
                                <option value = "สุรินทร์"> สุรินทร์ </option>
                                <option value = "หนองคาย"> หนองคาย </option>       
                                <option value = "หนองบัวลำภู"> หนองบัวลำภู </option>
                                <option value = "อำนาจเจริญ"> อำนาจเจริญ </option>    
                                <option value = "อุดรธานี"> อุดรธานี </option>
                                <option value = "อุบลราชธานี"> อุบลราชธานี </option>
                            </select> </p>
                        </div>
                        <div class="col-sm-3"></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-6">  
                            <p> อำเภอในการเพาะปลูก &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <select name = "District" id = "District">
                                <option value = "" selected = "selected"> -----โปรดเลือกอำเภอ----- </option>
                                <option value = "เมืองกาฬสินธุ์"> เมืองกาฬสินธุ์ </option>       <option value = "ยางตลาด"> ยางตลาด </option>
                                <option value = "ห้วยผึ้ง"> ห้วยผึ้ง </option>                 <option value = "น้ำพอง"> น้ำพอง </option>
                                <option value = "บ้านไผ่"> บ้านไผ่ </option>                 <option value = "จัตุรัส"> จัตุรัส </option>
                                <option value = "ศรีสงคราม"> ศรีสงคราม </option>            <option value = "เรณูนคร"> เรณูนคร </option>
                                <option value = "ท่าอุเทน"> ท่าอุเทน </option>               <option value = "ธาตุพนม"> ธาตุพนม </option>
                                <option value = "พิมาย"> พิมาย </option>                   <option value = "โชคชัย"> โชคชัย </option>
                                <option value = "ปากช่อง"> ปากช่อง </option>               <option value = "สูงเนิน"> สูงเนิน </option>
                                <option value = "สีคิ้ว"> สีคิ้ว </option>                     <option value = "จักราช"> จักราช </option>        
                                <option value = "ชุมพวง"> ชุมพวง </option>                 <option value = "ห้วยแถลง"> ห้วยแถลง </option>
                                <option value = "ด่านขุนทด"> ด่านขุนทด </option>            <option value = "สตึก"> สตึก </option>
                                <option value = "พยัคฆภูมิพิสัย"> พยัคฆภูมิพิสัย </option>       <option value = "บรบือ"> บรบือ </option>
                                <option value = "ค้อวัง"> ค้อวัง  </option>                   <option value = "มหาชนะชัย"> มหาชนะชัย  </option>      
                                <option value = "ปทุมรัตต์"> ปทุมรัตต์  </option>              <option value = "เกษตรวิสัย"> เกษตรวิสัย </option>
                                <option value = "สุวรรณภูมิ"> สุวรรณภูมิ  </option>            <option value = "โพนทราย"> โพนทราย </option>
                                <option value = "หนองฮี"> หนองฮี </option>                 <option value = "จตุรพักตรพิมาน"> จตุรพักตรพิมาน </option> 
                                <option value = "ศิลาลาด"> ศิลาลาด </option>               <option value = "ราษีไศล"> ราษีไศล </option>
                                <option value = "ยางชุมน้อย"> ยางชุมน้อย </option>           <option value = "ท่าตูม"> ท่าตูม </option>
                                <option value = "ชุมพลบุรี"> ชุมพลบุรี </option>               <option value = "โพนพิสัย"> โพนพิสัย  </option>
                                <option value = "เพ็ญ"> เพ็ญ </option>                     <option value = "วารินชำราบ"> วารินชำราบ </option>
                                <option value = "">  </option> 
                            </select> </p>
                        </div>
                        <div class="col-sm-3"></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-6">
                             <p> ตำบลในการเพาะปลูก &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <select name = "SubDistrict" id = "SubDistrict">
                                <option value = "" selected = "selected"> -----โปรดเลือกตำบล------ </option>
                                <option value = "โพนทอง"> โพนทอง </option>       <option value = "คำบง"> คำบง </option>
                                <option value = "สัมฤทธิ์"> สัมฤทธิ์ </option>         <option value = "จันทึก"> จันทึก </option>
                                <option value = "หัวช้าง"> หัวช้าง </option>          <option value = "วาริน "> วาริน </option>
                                <option value = "">  </option>
                            </select> </p>
                        </div>
                        <div class="col-sm-3"></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-6"> 
                            ขนาดพื้นที่ในการเพาะปลูก <input type ="text" id ="size"name="size"> ไร่ <br>
                         </div>
                        <div class="col-sm-3"></div>
                    </div> <br>
                    <div class="row">
                        <div class="col-sm-5"></div>
                        <div class="col-sm-4">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input class=" btn btn-info" name="filter" id="filter" type="submit" value="ค้นหา" style="width:80px;">
                        </div>
                        <div class="col-sm-3"></div>
                    </div>
                </form>
            </div>
            </div>
            </div>
            <div class="col-sm-2"></div>
        </div> <br>
    </div>
         
    <script src ="node_modules/jquery/dist/jquery.min.js"></script>
    <script src ="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src ="node_modules/popper.js/dist/umd/popper.min.js"></script>

</body>
<footer class="page-footer text-white font-small text-color-while pt-2 bg-dark">
    <div class="footer-copyright text-center py-3">© 2018 Copyright: Project Team</div>
</footer>
</html>