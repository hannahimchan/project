<?php
//รับค่ารหัสแผนกจากฟอร์ม
$description = $_REQUEST['description'];

require('connectdb.php');

//สร้างคำสั่ง sql
$query = "SELECT * FROM form WHERE description ='$description'";
// สั้งให้คำสั่ง sql ทำงาน
$result =$conn->query($query) or die ("Query Failed");

//ดึงข้อมูลมาใส่ในตัวแปล
$row = $result->fetch_array();
$description = $row['description'];

echo "<b>แก้ไขข้อมูลของลักษณะการชำรุด $description</b>";

//สร้าง ฟอร์มสำหรับข้อมูลใหม่
echo "<form action =\"oo_upd_dept.php\" methos=\"post\">";
echo "<input type=\"hidden\" name=\"description\" value=\"$description\">";
echo "ลักษณะการชำรุด : <input type=\"text\" name=\"description\" value=\"$description\">";
echo "<br><input type=\"submit\" name=\"update\" value=\"Update\">";
echo "</form>";

$result->free();
$conn->close();
?>