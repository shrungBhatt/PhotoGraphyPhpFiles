<?php
require "conn.php";

$user_name = $_POST["username"]; //funcion used to add slash before any wild card characters.
$user_pass = $_POST["password"];
$user_type = $_POST["user_type"];

$mysql_qry = "SELECT * FROM photography_user_data WHERE user_name='$user_name' AND password='$user_pass' AND user_type='$user_type'";

$result = mysqli_query($conn, $mysql_qry);

$row_cnt = mysqli_num_rows($result);

if($row_cnt > 0){
    echo json_encode(array("data" => array("result" => "Success")));
} else{
	echo json_encode(array("data" => array("result" => "Invalid credentials!")));
}

?>