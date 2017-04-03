<?php
require_once './config.php';

$conn = mysqli_connect($servername, $username)   ;
mysqli_select_db($conn, $db_name);
mysqli_set_charset($conn, 'utf8');

function getdata($obj){
	$arr = array();
	while($row = mysqli_fetch_assoc($obj)){
		$arr[] = $row;
	}
	return $arr;
}
function gethinh(){
	global $conn;
	$sql = "SELECT * FROM web";
	$obj = mysqli_query($conn, $sql);
	return getdata($obj);
}