<?php
include'connection.php';
error_reporting(0);

$id = $_GET['delid'];

$delete = "DELETE FROM studentregistration WHERE id = '$id'";

$result = $conn->query($delete);

if($result){
	echo "data deleted successfully!!";
}
else{
	echo "error in delete query";
}




?>