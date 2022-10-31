<?php

$servername = "localhost";
$username="root";
$password="";
$dbname = "prasanthdb";

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){ 
	die ("connection unsuccessful".$conn->connect_error);
		}

$sql = "CREATE TABLE websitename ( web_id INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY ,web VARCHAR(20)) ;";


if($conn->query($sql)===TRUE){
	echo "Table created successfully";
}else{
	echo "Error creating table".$conn->error;	
}

?>