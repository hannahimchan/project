<?php
require('connectdb.php');

$description = $_REQUEST['description'];

$sql = "DELETE from form WHERE description ='$description'";

//excute sql
if($conn->query($sql)){
	echo "Record deleted!";
}else{
	echo "Error :",mysql_error();
}
$conn->close();
?>