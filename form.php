
<?php
    require('connectdb.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>กรอกข้อมูล</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="js/wow.min.js"></script>
    <link rel="stylesheet" href="css/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            
            $("#type").click(function(){
                $("#elect").slideDown("slow");
            });
        });
    </script>

    
    <style>
        @import url('https://fonts.googleapis.com/css?family=Bai+Jamjuree|Mali');

        h1 {
            color: rgb(0, 0, 0);
        }

        label {
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

        body {
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
          <div style="margin:auto;width:80%;">

            <form method="POST" action="save_form.php">
                    <h1>แบบฟอร์มแจ้งซ่อม</h1>
                    <fieldset>
                        <h3>กรอกข้อมูล</h3>
                        
                    <?php
                        /*วันที่*/
                        $yearMounth = substr(date("Y")+543, -2)."-".date("m")."-".date("d"); 

                       /*รันเลขที่แจ้ง*/ 
                        $sql="SELECT MAX('id') AS 'lastid' FROM 'form'";
                        // $sql = "SHOW TABLE STATUS LIKE 'form";
                        $result = @mysqli_query($sql);
                        $row = @mysqli_fetch_assoc($result);
                        $id = (int)$row['Auto_increment']; 

                        $autoIdYear = $yearMounth."/".$id;
                        // $maxID = 0;
                        // $maxID = ($maxID +1 );
                        // $maxID = substr("00000".$maxID,-2);
                        // echo "วันที่แจ้งซ่อม/เลขที่แจ้ง : " . $yearMounth."/".$id. "<br>";
                    ?><br>
                        
                    <div class="form-gruop">
                        <label for="num">วันที่แจ้งซ่อม/เลขที่แจ้ง </label>
                        <input type="text" class="form-control" id="num" name="num" value="<?=$autoIdYear?>"
                            readonly required autofocus>
                    </div>

                     <div class="form-gruop">
                        <label for="First Name">ชื่อ</label>
                        <input type="text" class="form-control" id="fname" name="fname"
                            placeholder="" required autofocus>
                    </div>

                     <div class="form-gruop">
                        <label for="Last Name">นามสกุล</label>
                        <input type="text" class="form-control" id="sname" name="sname"
                            placeholder="" required autofocus>
                    </div>

                    <div class="form-gruop">
                        <label for="Department">หน่วยงาน</label>
                        <input type="text" class="form-control" id="department" name="department"
                            placeholder="" required autofocus><br>
                    </div>

                    <div class="form-gruop">
                        <label for="type">ประเภท</label>
                            <?php
                                $type = "SELECT * FROM type";
                                $result = mysqli_query($conn, $type);
                            ?>
                        <select name="type" id="type">
                            <option value="">---เลือกประเภท---</option>
                            <?php
                                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                    echo "<option value='$row[id]'>$row[name]</option>";
                                }
                            ?>
                        </select><br><br>
                    </div>

                    <div class="form-gruop" id="elect">
                        <label for="elect">ไฟฟ้า</label><br>

                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="electricity[]" value="หลอดไฟ">หลอดไฟ &nbsp;&nbsp;
                        <input type="checkbox" name="electricity[]" value="ปลั๊กไฟ"> ปลั๊กไฟ &nbsp;&nbsp;
                        <input type="checkbox" name="electricity[]" value="แอร์"> แอร์ &nbsp;&nbsp;
                        <input type="checkbox" name="electricity[]" value="พัดลม"> พัดลม &nbsp;&nbsp;
                        <input type="checkbox" name="electricity[]" value="พัดลมดูดอากาศ"> พัดลมดูดอากาศ &nbsp;&nbsp;<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="electricity[]" value="เครื่องใช้ไฟฟ้า(ของวิทยาเขต)"> เครื่องใช้ไฟฟ้า(ของวิทยาเขต) &nbsp;&nbsp;
                        <input type="checkbox" name="electricity[]" value="อื่นๆ (ระบุ)"> อื่นๆ (ระบุ) <br>
                        <textarea name="other_electricity" rows="4" cols="30" placeholder="อื่นๆ (ระบุ)"></textarea> <br><br>
                    </div>

                    <div class="form-gruop" id="sa">
                        <label for="sanitaty">ตัวอาคาร</label><br>

                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="sanitary[]" value="ประตู"> ประตู &nbsp;&nbsp;
                        <input type="checkbox" name="sanitary[]" value="หน้าต่าง"> หน้าต่าง &nbsp;&nbsp;
                        <input type="checkbox" name="sanitary[]" value="กระเบื้อง"> กระเบื้อง &nbsp;&nbsp;
                        <input type="checkbox" name="sanitary[]" value="ฝ้าเพดาน"> ฝ้าเพดาน&nbsp;&nbsp;
                        <input type="checkbox" name="sanitary[]" value="ท่อนํ้า"> ท่อนํ้า&nbsp;&nbsp;<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="sanitary[]" value="สุขภัณฑ์"> สุขภัณฑ์&nbsp;&nbsp;
                        <input type="checkbox" name="sanitary[]" value="นํ้าฝนรั่ว"> นํ้าฝนรั่ว&nbsp;&nbsp;
                        <input type="checkbox" name="sanitary[]" value="อื่นๆ"> อื่นๆ (ระบุ)
                        <textarea name="other_sanitaryy" rows="4" cols="30" placeholder="อื่นๆ (ระบุ)"></textarea> <br><br>
                    </div>

                    <div class="form-gruop" id="office">
                        <label for="office">ครุภัณฑ์</label><br>

                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox" name="office[]" value="เก้าอี้"> เก้าอี้ &nbsp;&nbsp;
                        <input type="checkbox" name="office[]" value="โต๊ะ"> โต๊ะ &nbsp;&nbsp;
                        <input type="checkbox" name="office[]" value="ตู้เก็บเอกสาร"> ตู้เก็บเอกสาร &nbsp;&nbsp;
                        <input type="checkbox" name="office[]" value="งานโลหะ/ไม้"> งานโลหะ/ไม้ &nbsp;&nbsp;
                        <input type="checkbox" name="office[]">อื่นๆ (ระบุ)<br>
                        <textarea name="other_office" rows="4" cols="30" placeholder="อื่นๆ (ระบุ)"></textarea> <br><br>
                    </div>

                    <div class="form-gruop">
                        <label for="description">ลักษณะที่ชำรุด</label>
                        <textarea name="description" rows="4" cols="30" class="form-control" id="des"
                            placeholder="เพิ่มเติมลักษณะที่ชำรุด"  autofocus></textarea><br>
                    </div>

                    <div class="form-gruop">
                        <label for="place">สถานที่/อาคาร</label>
                            <?php
                                $q = "SELECT * FROM place";
                                $result = mysqli_query($conn, $q);
                            ?>
                        <select name="rep_place" id="rep_place">
                            <option value="">---เลือกสถานที่---</option>
                            <?php
                                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                    echo "<option value='$row[rep_place]'>$row[rep_placename]</option>";
                                }
                            ?>
                        </select><br><br>
                    </div>

                    <div class="form-gruop">
                        <label for="floor_m">ชั้น </label>
                            <?php
                                $f = "SELECT * FROM floor";
                                $result = mysqli_query($conn, $f);
                            ?>
                        <select name="rep_floor"  id="rep_floor">
                            <option value="">---ชั้น---</option>
                            <?php
                                while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
                                    echo "<option value='$row[0]'>$row[0]</option>";
                                }
                            ?>
                        </select><br><br>
                    </div>

                    <div class="form-gruop">
                        <label for="room">ห้อง</label>
                            <textarea name="room" rows="2" cols="30" class="form-control" id="room"
                            placeholder="กรุณาใส่เลขห้อง" ></textarea><br>
                    </div>

                </fieldset><br>

                
                <button type="submit" value="SAVE" class="btn btn-success">แจ้ง</button>
                <button type="reset" value="Cancel" class="btn btn-danger">ล้างทั้งหมด</button>
                <a href="index.html"><button type="button" class="btn btn-primary">ย้อนกลับสู่หน้าหลัก</button></a>

            </form><br>
          
         </div>
      </div>
    </div>

</body>

</html>