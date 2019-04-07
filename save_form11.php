<?php
    require('connectdb.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>บันทึกข้อมูล</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    

    <style>
        @import url('https://fonts.googleapis.com/css?family=Bai+Jamjuree|Mali');
            h1{color: rgb(0, 0, 0);
                font-family: 'Bai Jamjuree', sans-serif;
            }
            label{
                font-family: 'Bai Jamjuree', sans-serif;
            }
            .row {
                margin-top: 50px;
            }
    
            #rowcenter {
                opacity: 0.8;
                filter: alpha(opacity=40);
                background-color: rgb(220, 228, 250);
                border-radius: 20px;
                box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            }
            body{
                background: url("5.jpg") no-repeat center center fixed;
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
          <h1></h1><br>
          
        <?php
           require('connectdb.php');
                $yearMounth = substr(date("Y")+543, -2)."-".date("m")."-".date("d");
                  
                $sql="SELECT MAX('id') AS 'lastid' FROM 'form'";
                // $sql = "SHOW TABLE STATUS LIKE 'form";
                $result = @mysqli_query($sql);
                $row = @mysqli_fetch_assoc($result);
                $id = (int)$row['Auto_increment']; 
                       
                    
                // $startId ="0";
                // $tablename="form";
                // $startnumber="0";
                // $sqlAuto="select * from $tablename";   
                // $resultAuto=$conn->prepare($sqlAuto);
                // $resultAuto->execute();
                // $rsAuto=$resultAuto->fetch();
                // $maxId = $resultAuto->rowCount();
                // $maxId = ($maxId+1);
                // $maxId = substr($startnumber.$maxId,-2);
                // $autoid=$startId.$maxId;
                    
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
                
                echo "วันที่แจ้งซ่อม/เลขที่แจ้ง : " . $autoIdYear."<br>";
            
                // echo "วันที่แจ้งซ่อม : ",$date,"\n<br>";
                // echo "เลขที่แจ้ง : ",$number,"\n<br>";
                echo "ชื่อ-สกุล : ",$fname," ",$sname,"\n<br>";
                echo "หน่วยงาน : ", $department,"\n<br>";

                //check  ไฟฟ้า/แอร์
                if(isset($electricity)){
                   echo "ไฟฟ้า/แอร์: ";
                    foreach($_POST['electricity'] as $value) {
                     echo $value, " ";
                    }
                }else{
                    echo " ";
                }
                echo "<br>";

                //check สุขาภิบาล
                if(isset($sanitary)){
                    echo "สุขาภิบาล/อาคาร: ";
                     foreach($_POST['sanitary'] as $value) {
                      echo $value, " ";
                     }
                }else{
                     echo " ";
                }

                echo "<br>";
                //check อุปกรณ์สำนักงาน
                if(isset($office)){
                    echo "อุปกรณ์สำนักงาน: ";
                     foreach($_POST['office'] as $value) {
                      echo $value, " ";
                     }
                }else{
                     echo " ";
                }
                
                // //check radio สุขาภิบาล
                // if(empty($type_sanitary)){
                   
                // }else {
                //     echo "<br>",$type_sanitary," : ";
                // }
                
                // //checkbox value ไฟฟ้า/แอร์
                // // echo "<br>",$type_sanitary, ":"  ," " ;
                // foreach($_POST['sanitary'] as $value) {
                //     echo $value, " ";
                // }

                // //check radio อุปกรณ์สำนักงาน
                // if(empty($type_office)){
                //     // echo "<br>";
                // }else{
                //     echo "<br>",$type_office," : ";
                // }

                // //checkbox value  อุปกรณ์สำนักงาน
                // // echo "<br>",$type_office, ":"  ," " ;
                // foreach($_POST['office'] as $value) {
                //     echo $value, " " ;
                // }
                echo "<br>ลักษณะที่ชำรุด : ", $description ,"\n<br>";
                echo "สถานที่/อาคาร : ",$place,"\n<br>";
                echo "ชั้น : ",$floor_m,"\n<br>";

                if(empty($room)){
                    // echo "<br>";
                }else{
                    echo "ห้อง : ",$room,"\n<br>";
                }

                $sql= "INSERT INTO form(rep_id,rep_date,rep_Department,rep_elect,rep_building,rep_office,rep_description,rep_place,rep_floor,rep_room)
                VALUES ($id,'$yearMounth','$department','$value','$value','$value','$description','$place','$floor_m','$room')";

                   
            $result = mysqli_query($conn,$sql);
            mysqli_close($conn);

                
               

                //เขียนข้อมูลในไฟล์ data
                // $file = fopen('data.txt','a+')  or die("Unable to open file!");
                // $str = "$date,$number,$fname,$sname,$department,$type_electricity,$type_sanitary,$type_office,$description,$place,$floor_m,$room\n";
                // fwrite($file,$str);
                // fclose($file);

                
                
        ?>
        <br><br>
            <a href="list_form1.php"><button type="button" value="SAVE" class="btn btn-info">แสดงข้อมูลการแจ้งซ่อม</button></a>
            <a href="fome_1.html"><button type="button" class="btn btn-success">ย้อนกลับ</button></a>
            <br><br>
        </div>
    </div>
</body>
</html>