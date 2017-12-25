	
<html>
<style>
table, th, td {
    border: 1px solid black;
	border-collapse: collapse;
}
</style>
<div class="row">
    <div class="table-responsive pricing_grid">
      <table id="pricing_table" class="table table-bordered table-sm">
        <colgroup>
          <col class="col-sm-2">
          <col class="col-sm-2">
          <col class="col-sm-2">
          <col class="col-sm-2">
          <col class="col-sm-2">
          <col class="col-sm-2">
        </colgroup>
        <thead class="text-center">
              <tr>
                <th class="text-center">Package Option </th>
                <th class="text-center">Small </th>
                <th class="text-center">Medium </th>
                <th class="text-center">Large </th>
              </tr>
         </thead>
        <tbody>
          <tr>
              <td>Use </td>
              
              <td class="text-left">For commercial projects with small computational power </td>
              <td class="text-left">For commercial projects with medium computational power </td>
              <td class="text-left">For commercial projects with large computational power </td>
          </tr>
          <tr>
              <td>Scalable for larger projects </td>
              <td>No. Annual usage is capped. </td>
              <td>Yes </td>
              <td>Yes </td>
                           
          </tr> <!-- Row 4 deleted at after FF -->
          <tr >
              <td>Number of messages </td>
              <td class="messages">10 million/year<br>(~17,280/day) </td>
              <td class="messages">70 million/year per unit<br>(~870,000/day per unit) </td>
              <td class="messages">More than 150 million/year per unit<br>(~870,000/day per unit) </td>
              </tr>
          <tr>
              <td>Message update interval limit </td>
              <td>Every 20 seconds </td>
              <td>Every second </td>
              <td>Every second </td>
          </tr>
           <tr>
              <td>Compute Timeout </td>
              <td>20 seconds </td>
              <td>20 seconds </td>
              <td>20 seconds </td>
          </tr>
           
          <!-- Pricing row deleted at after Feature Freeze -->
        </tbody>
      </table>
    </div>
</div>
    <head>
        <title>Data Processing Calculator</title>
    </head>
    <body>
        <h1>Data Processing Calculator</h1>
        <form method="POST" action= "<?php echo $_SERVER['PHP_SELF'];?>" >
           No of devices : <input type="number" name="No_of_Devices"/>
           Time taken per data : <input type="number" name="No_of_Msg"/>
            <input type="submit" value="Calculate"/>
           
        </form>
       
    </body>

</html>

<?php

if(isset($_POST['No_of_Devices'])&&($_POST['No_of_Msg'])){

  $nodevice = htmlentities($_POST['No_of_Devices']);
  $nomsg = htmlentities($_POST['No_of_Msg']);

              if(!empty($nodevice)&&($nomsg)){
                
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname="ippi";
                
                $perMinute="";
                $perHour="";
                $perDay="";
                $perMonth="";
                $perYear="";
				
				$small="3000000";
				$medium="7000000";

                //create calculation
                  $perMinute=60/$nomsg*$nodevice;
                  $perHour=$perMinute*60;
                  $perDay=$perHour*24;
                  $perMonth=$perDay*30;
                  $perYear=$perMonth*12;


                // Create connection
                $conn = mysqli_connect($servername,$username,"",$dbname);
				

                // Check connection
                /*if (!$conn) {
                    die("Connection failed: " . mysql_connect_error());
                }
                echo "Connected successfully <br>";*/


                mysqli_select_db($conn,$dbname);

                $sql = "INSERT INTO dataprocessor (noDevices, noData, perHour, perMinute, perDay, perMonth, perYear)
                VALUES ('$nodevice','$nomsg','$perHour','$perMinute','$perDay','$perMonth','$perYear')";

                $sql1 = "SELECT perMinute, perHour, perDay ,perMonth ,perYear FROM dataprocessor ORDER BY id desc limit 1 ";
                $result = mysqli_query($conn,$sql1);
                //$testquery = mysql_query($result) or die(mysql_error());

               
/*
                while($row = mysqli_fetch_assoc($result)){
                  echo "perMinute  " . $row['perMinute'] . " messages"; 
                  echo "<br>";
                  echo "perHour  " . $row['perHour'] . " messages";
                  echo "<br>";
                  echo "perDay  " . $row['perDay'] . " messages";
                  echo "<br>";
                  echo "perMonth  " . $row['perMonth'] . " messages";
                  echo "<br>";
                  echo "perYear  " . $row['perYear'] . " messages";
                  echo "<br>";
                  //handle rows.
                }
				*/
				//mysqli_free_result($row);
				
                if ($perYear < $small) {
                    echo "We recommend Small Package .";
                  echo "<br>";
				  echo "Price = RM 600/year";
                } elseif ($perYear < $medium) {
                    echo "We recommend Medium Package";
                  echo "<br>";
				   echo "Price = RM 1000/year";
                } else {
                    echo "We recommend Large Package";
                  echo "<br>";
				   echo "Price = RM 2000/year";
                }
				
				echo "<br>";
				echo '<input type="button"  value="Purchase" onclick="window.location=\'C://localhost/aws/credentials\'"/>';
				
				// Free the resources associated with the result set
                // This is done automatically at the end of the script
				//mysql_free_result($result);


                if (!mysqli_query($conn,$sql))
                  {
                  die('Error: ' . mysql_error());
                  }
				   echo "<br>";
                echo ""; 


                mysqli_close($conn);
              }
			  
}

?>