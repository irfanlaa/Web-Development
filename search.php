<?php 
if(isset($_POST['search']))
{
	$valueToSearch=$_POST[''];

}

else{
	$query = "SELECT fruit,image,price FROM fruits";
	$search_result=filterTable($query);
}

function filterTable($query)
{
	$connect=mysqli_connect("localhost", "root", "", "database_ippi");
	$filter_result=mysqli_query($connect,$sql);
	return $filter_result;
}



?>