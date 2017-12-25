

<?php include "process/connection.php"; 
session_start();
?>

<?php
	$password_old= $_POST['password_old'];
	$password_new= $_POST['password_new'];
	$password_re= $_POST['password_re'];
	

	if(isset($_POST['change_pass'])) {
		$check= mysqli_query($con,"SELECT * FROM user WHERE Username='".$_SESSION['Username']."'");
		// $rows=mysql_num_rows($check);

		while($row=mysqli_fetch_assoc($check)){
			$get_pass=$row['Password'];

		}
		
		if(md5($password_old)==$get_pass){
		
				if($password_re == $password_new) {
					$query="UPDATE user SET Password='".md5($password_new)."' WHERE Username='".$_SESSION['Username']."'";
					mysqli_query($con,$query); 
					
					echo "<script>
					alert('Sucessfully change the password.')
					</script>";
					
					echo "<script>
					window.location.href='index.php'
					</script>";
					//header ("index.php");

					}
				 
				elseif($password_new != $password_re){
				
					echo "<script>
					alert('New password do not match.')
				    </script>";
				 	echo "<script>
				 	window.location.href='customer-account.php'
				 	</script>";
				    //header("customer-account.php");
					 }

				 
				else{
					
					//echo "<script>
					//alert('Your current password do not match with real password.')
					//</script>";
					//echo "<script>
					//window.location.href='customer-account.php'
					//</script";
					//header("customer-account.php");
					}
}

				else{

					echo "<script>
					alert('You must login first in order to change password')
				    </script>";
				 	echo "<script>
				 	window.location.href='customer-account.php'
				 	</script>";
				}
}
?>

<script type="text/javascript">
	alert('Your current password do not match with real password.')
	window.location.href='customer-account.php'
</script>


