<?php
require "conn.php";

$photo_category = $_POST["photo_category"];
$image = $_POST["image"];
$create_date = date('Y-m-d H:i:s');




$path = "photography/categories/$photo_category.png";

$actualpath = "http://ersnexus.esy.es/$path";

$mysql_qry = "INSERT INTO photography_photo_categories
(photo_category,
photo_url,
create_date) 
VALUES 
('$photo_category',
'$actualpath',
'$create_date')";



if($conn->query($mysql_qry) === TRUE){
    file_put_contents($path,base64_decode($image));
    $result = "Insert Successful";
	echo json_encode(array("data" => array("result" => $result)));
}else{
    $result = $conn->error;
	echo json_encode(array("data" => array("result" => $result)));
}

?>