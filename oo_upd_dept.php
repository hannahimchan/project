<?php
require('connectdb.php');
$description = $_REQUEST['description'];


$sql = "UPDATE form set description='$description' where description='$description'";

//excute sql
if($conn->query($sql)){
	echo "RECORD UPDATE";
}else{
	echo "ERROR :",mysql_error();
}

?>