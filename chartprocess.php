<?php 

 header('Access-Control-Allow-Origin:*');
 header('Content-Type:application/json');

 include "connection.php"; 

 echo 'tahi ayam eat'




$data2=$_GET['data2'];

 $result=mysqli_query($con,"SELECT $data2, year FROM durian_data");
 $data=array();
 while($row=mysqli_fetch_assoc($result)){
	$data[]=$row;
 }
print json_encode($data);
?>