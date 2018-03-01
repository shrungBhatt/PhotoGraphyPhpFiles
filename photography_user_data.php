<?php
require "conn.php";


$email = $_POST["email_id"];
$username = $_POST["username"];
$password = $_POST["password"];
$dob = $_POST["dob"];
$phoneNo = $_POST["phone_no"];
$gender = $_POST["gender"]
$date = date('Y-m-d H:i:s');

$mysql_qry = "insert into photography_user_data(email_id, user_name, password, create_date) values ('$mac_id','$username','$password','$date')";

if($conn->query($mysql_qry) === TRUE){
	echo "Insert SuccessFul";
}else{
	echo "Error " . $mysql_qry . "<br>" . $conn->error;
}

?>