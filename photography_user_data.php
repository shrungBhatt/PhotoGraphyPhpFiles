<?php
require "conn.php";


$email = $_POST["email_id"];
$username = $_POST["username"];
$password = $_POST["password"];
$dob = $_POST["dob"];
$phoneNo = $_POST["phone_no"];
$gender = $_POST["gender"];
$userType = $_POST["user_type"];
$date = date('Y-m-d H:i:s');

$mysql_qry = "insert into photography_user_data(email_id, user_name, password, create_date,user_type) values ('$mac_id','$username','$password','$date','$userType')";

if($conn->query($mysql_qry) === TRUE){
	echo "Insert SuccessFul";
}else{
	echo "Error " . $mysql_qry . "<br>" . $conn->error;
}

?>