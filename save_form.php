<?php
    require('connectdb.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ตรวจสอบข้อมูล</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <style>
        @import url('https://fonts.googleapis.com/css?family=Bai+Jamjuree|Mali');
            h1{color: rgb(0, 0, 0);
                font-family: 'Bai Jamjuree', sans-serif;
            }
            label{
                font-family: 'Prompt', sans-serif;
            }
            .row {
                margin-top: 50px;
            }
    
            #rowcenter {
                opacity: 0.9;
                filter: alpha(opacity=40);
                background-color: rgb(220, 228, 250);
                border-radius: 20px;
                box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            }
            body{
                background: url("img/6.jpg") no-repeat center center fixed;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }
            
    </style>

</head>
<body>
<div class="row">
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"> </div>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" id="rowcenter">
           
    <div style="margin:auto;width:70%;">
        <?php
            /*วันที่*/
            $yearMounth = substr(date("Y")+543, -2)."-".date("m")."-".date("d");

            /*รันเลขที่แจ้ง*/                
            $sql="SELECT MAX('id') AS 'lastid' FROM 'form'";
            // $sql = "SHOW TABLE STATUS LIKE 'form";
            $result = @mysqli_query($sql);
            $row = @mysqli_fetch_assoc($result);
            $id = (int)$row['Auto_increment']; 

            /*ชื่อตัวแปร*/
            $autoIdYear = $yearMounth."/".$id;
            $fname = $_POST["fname"];
            $sname = $_POST["sname"];
            $department = $_POST["department"];
            $electricity = $_POST["electricity"];
            $sanitary = $_POST["sanitary"];
            $office = $_POST["office"];
            $description = $_POST["description"];
            $place = $_POST["rep_place"];
            $floor_m = $_POST["rep_floor"];
            $room = $_POST["room"];
        ?>
        
           
        <h3>ชื่อผู้ใช้ : <?=$fname."  ".$sname?></h3>
            <h2>ตรวจสอบข้อมูล</h2><br>
            <p><b>วันที่แจ้งซ่อม/เลขที่แจ้ง : </b> <?=$autoIdYear?></p>
            <p><b>หน่วยงาน : </b><?=$department?></p>
            <p><?php
                if(isset($electricity)){
                    echo "<b>ไฟฟ้า/แอร์: </b>";
                   foreach($_POST['electricity'] as $value) {
                    echo $value, " ";
                    }
                }else {
                    echo " ";
                }
                echo "<br>";
                ?>
            </p>
            <p><?php
                if(isset($sanitary)){
                    echo "<b>สุขาภิบาล/อาคาร: </b>";
                    foreach($_POST['sanitary'] as $value) {
                        echo $value, " ";
                    }
                }else{
                 echo " ";
                }
                echo "<br>";
                ?>
            </p>
            <p><?php
                if(isset($office)){
                    echo "<b>อุปกรณ์สำนักงาน: </b>";
                    foreach($_POST['office'] as $value) {
                        echo $value, " ";
                    }
                }else{
                    echo " ";
                }
                ?>
            </p>
            <p><b>ลักษณะที่ชำรุด : </b><?=$description?></p>
            <p><?php
                if(empty($place)){
                    echo "";
                }else{
                    echo "<b>สถานที่/อาคาร : </b>",$place,"\n<br>";
                }
                ?>
            </p>
            <p><?php
                if(empty($floor_m)){
                    echo "";
                }else{
                    echo "<b>ชั้น : </b>",$floor_m,"\n<br>";
                }
                ?>
            </p>
            <p><?php
                if(empty($room)){
                    echo "";
                }else{
                    echo "<b>ห้อง : </b>",$room,"\n<br>";
                }
                ?>
            </p>

                <button type="submit" value="SAVE" class="btn btn-success" onClick='alert("ยืนยันการบันทึกข้อมูลการแจ้งซ่อมนี้ใช่หรือไม่")'><a href="list_form.php">บันทึก</a></button>
                <a href="form.php"><button type="button" class="btn btn-primary">ย้อนกลับไปยังหน้าแจ้งซ่อม</button></a>
            <br><br>
        </div>

        <?php
            /*บันทึกข้อมูลลง Database*/
            $sql= "INSERT INTO form(id,date,department,elect,building,office,description,place,floor,room)
            VALUES ($id,'$yearMounth','$department','$value','$value','$value','$description','$place','$floor_m','$room')";

            $result = mysqli_query($conn,$sql);
            mysqli_close($conn);
        ?>
    </div>

</body>
</html>