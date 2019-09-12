<?php
  require('connectdb.php');
  session_start(); //เปิด session
    if($_SESSION['ID'] == ""){
      header("Content-type: text/html; charset=utf-8");
      echo"<script language='JavaScript' >";
      echo"alert('กรุณากรอกข้อมูลเพื่อเข้าสู่ระบบ');";
      Header("Location: login.php");
      echo"</script>";		
     exit(); 
    }    

    $query = "SELECT * FROM user WHERE ID = '".$_SESSION['ID']."' ";            
    $result = mysqli_query($conn, $query) or die(mysqli_error());
    $objResult = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ตรวจสอบข้อมูล</title>

  <!-- bootstrap -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <!-- close bootrap -->

  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/popper_1_14_3.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/design.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


  <style>
    @import url('https://fonts.googleapis.com/css?family=Bai+Jamjuree|Mali');

    h1 {
      color: rgb(0, 0, 0);
      font-family: 'Bai Jamjuree', sans-serif;
    }

    h2,
    h4 {
      text-align: left;
      color: #fff;
    }

    label {
      font-family: 'Prompt', sans-serif;
    }

    /* .row {
                margin-top: 50px;
            }
    
            #rowcenter {
                opacity: 0.9;
                filter: alpha(opacity=40);
                background-color: rgb(220, 228, 250);
                border-radius: 20px;
                box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            } */
  </style>



</head>

<body>
  <!-- header -->
  <!-- <div class="jumbotron  text-center head-top mb-0">
    <div class="pb-2 pr-2" style="float: left; ">
      <img src="https://eds.trang.psu.ac.th/mis/student/assets/images/logo.png" class="img-responsive"
        alt="Responsive image"></div>
    <div class="">
      <h2>ระบบแจ้งซ่อมทั่วไปฝ่ายอาคารสถานที่</h2>
      <h4>มหาวิทยาลัยสงขลานครินทร์ วิทยาเขตตรัง</h4>
    </div>
  </div> -->
  <!-- close header -->

  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bar-top">
    <div><img src="img/PSU.png" class="ml-3 my-auto mr-2 img-hd" alt="Responsive image"></div>

    <a class="navbar-brand" href="#">ระบบแจ้งซ่อมทั่วไปฝ่ายอาคารสถานที่</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto nav-a">
        <li class="nav-item ">
          <a class="nav-link" href="index_user.php">หน้าหลัก</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="form_user.php " >แจ้งซ่อม</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="show_user.php">ข้อมูลการซ่อม</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <img class="d-inline" src="img/5.png" width="40" height="40"> <?php echo $objResult["Firstname"]." ".$objResult["Lastname"];?>
                    </a>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="profile_user.php">ข้อมูลส่วนตัว</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="logout.php">ออกจากระบบ</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>


  <!-- main -->
  <div class="container">
    <div class="row">
      <div class="col py-sm-5">
        <div class="card ">
          <div class="card-header text-light">
            <h2 style="text-center;">ตรวจสอบข้อมูล<h2>
          </div>
          <div class="card-body bg-light px-sm-5">
          
            <?php
              /*วันที่*/
              // $yearMounth = substr(date("Y")+543, -2)."-".date("m")."-".date("d");

              // /*รันเลขที่แจ้ง*/                
              // $sql="SELECT MAX('id') AS 'lastid' FROM 'repair_data'";
              // // $sql = "SHOW TABLE STATUS LIKE 'form";
              // $result = @mysqli_query($sql);
              // $row = @mysqli_fetch_assoc($result);
              // $id = (int)$row['Auto_increment']+1; 
              // $id = substr("00000".$id,-2);

              // $iD = 0;
              // $iD = ($iD +1 );
              // $iD = substr("00000".$iD,-2);

              /*ชื่อตัวแปร*/
              // $autoIdYear = $yearMounth."/".$id; 
              // $number_id = $_POST["number_id"];
              $dt = $_POST["dt"];
              $fname = $_POST["fname"];    
              $sname = $_POST["sname"];    
              $department = $_POST["department"];
              $type = $_POST["type"];
              $description = $_POST["description"];
              $place = $_POST["place"];

            ?>
            <!-- <p align="right"><b>เลขที่แจ้ง : </b> <?=$number_id?></p> -->
            <p align="right"><b>วันที่แจ้งซ่อม : </b> <?=$dt?></p>
            <p><b>ชื่อผู้ใช้ : </b><?=$fname."  ".$sname?></p>
            <p><b>หน่วยงาน : </b><?=$department?></p>
            <p><b>ประเภท : </b><?=$type?></p>
            <p>
            <?php  
            $values_type = implode(" ",$_POST["values_type"]);
              // if(isset($type)){                                             //check list box เป็นค่าว่างมั้ย
              //   if($type == 1){     
              //     echo "<b>ไฟฟ้า :</b> $values_type  ";
                 
              //   }else if($type == 2){  
              //     echo "<b>ตัวอาคาร :</b> $values_type ";                                     //ถ้า list box = 2 แสดงว่าเลือกสุขาภิบาล/อาคาร
                  
              //   }else {                                                     //ถ้า list box != 1,2 แสดงว่าเลือกอุปกรณ์สำนักงาน
              //     echo "<b>ครุภัณฑ์ :</b> $values_type ";
              //   }
              // }
            // <p><?php 
            
            //   if(isset($type)){                                             //check list box เป็นค่าว่างมั้ย
            //     if($type == 1){                                             //ถ้า list box = 1 แสดงว่าเลือกไฟฟ้า
            //       $electricity = implode(" ",$_POST["electricity"]);
            //       echo "<b>ไฟฟ้า :</b> $electricity ";
            //       // if($_POST["electricity"]) {
            //       //   foreach($_POST["electricity"] as $electricity) {
            //       //     echo $electricity, " ";
            //       //     // print_r($electricity);
            //       //   }  
            //       // }
            //     }else if($type == 2){  
            //       $sanitary = implode(" ",$_POST["sanitary"]);
            //       echo "<b>ตัวอาคาร :</b> $sanitary ";                                     //ถ้า list box = 2 แสดงว่าเลือกสุขาภิบาล/อาคาร
            //       // echo "<b>ตัวอาคาร : </b>";
            //       // if($_POST["sanitary"]){
            //       //   foreach($_POST["sanitary"] as $sanitary) {
            //       //     echo $sanitary, " ";
            //       //   }  
            //       // }
            //     }else {                                                     //ถ้า list box != 1,2 แสดงว่าเลือกอุปกรณ์สำนักงาน
            //       $office = implode(" ",$_POST["office"]);
            //       echo "<b>ครุภัณฑ์ :</b> $office ";
            //       // echo "<b>ครุภัณฑ์ : </b>";
            //       // if($_POST["office"]){
            //       //   foreach($_POST["office"] as $office) {
            //       //     echo $office, " ";
            //       //   }  
            //       // }
            //     }
            //   }
              ?>
            </p>
            <p><b>ลักษณะที่ชำรุด : </b><?=$description?></p>
            <p><b>สถานที่ : </b><?=$place?></p>

            <a href="show_user.php"><button type="save" class="btn btn-success"
                onClick='alert("ยืนยันการบันทึกข้อมูลการแจ้งซ่อมนี้ใช่หรือไม่")'>บันทึก</button></a>
            <a href="form_user.php"><button type="button" class="btn btn-primary">ย้อนกลับไปยังหน้าแจ้งซ่อม</button></a>
            <br><br>
            
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- footer -->
  <footer class="footer foot">
    <div class="container-fluid">
      <div class="footer-logo">PSU Trang Campus.</div>
      <span class="copyright">Copyright © 2019 | <a href="http://www.trang.psu.ac.th">มหาวิทยาลัยสงขลานครินทร์
          วิทยาเขตตรัง</a></span>
    </div>
  </footer>

<?php  
/*บันทึกข้อมูลลง Database*/
 date_default_timezone_set('Asia/Bangkok');           
 $dt = date("Y-m-d H:i:s");
 
 $sql = "INSERT INTO repair_data (date,Firstname,Lastname,Department,Type,values_type,description,place) 
         VALUES ('$dt','$fname','$sname','$department','$type','$values_type','$description','$place')";
 
 echo $sql;   //ทำการ echo ค่าของ $sql ออกมาดูครับ เพื่อจะทำไปแก้ Error โดยใช้ฐานข้อมูล mysql 

 $result = mysqli_query($conn,$sql);
 if($result) {
  echo "('status' => '1','message'=> 'Record add successfully')";
 }else{
  echo "('status' => '0','message'=> 'Error insert data!')";
 }

 mysqli_close($conn);
 ?>
</body>

</html>