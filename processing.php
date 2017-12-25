
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

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Obaju e-commerce template">
    <meta name="author" content="Ondrej Svestka | ondrejsvestka.cz">
    <meta name="keywords" content="">

    <title>
        Data Processing Calculator
    </title>

    <meta name="keywords" content="">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>

    <!-- styles -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">

    <!-- theme stylesheet -->
    <link href="css/style.default.css" rel="stylesheet" id="theme-stylesheet">

    <!-- your stylesheet with modifications -->
    <link href="css/custom.css" rel="stylesheet">

    <script src="js/respond.min.js"></script>

    <link rel="shortcut icon" href="favicon.png">



</head>

<body>
    <?php include "navbar.php"; ?>
    <!-- *** TOPBAR ***
 _________________________________________________________ -->
  

    <div id="all">

        <div id="content">
            <div class="container">

                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a>
                        </li>
                        <li>Data Processing</li>
                    </ul>
                </div>

                <div class="col-md-9" id="basket">

                    <div class="box">

                        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">

                            <h1>Data Processing</h1>
                            <p class="text-muted"></p>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th >Package Option</th>
                                            <th>Small</th>
                                            <th>Medium</th>
                                            <th>Large</th>

                                            <th colspan="2"></th>
                                        </tr>
                                    </thead>
                                    <tbody>

                               
                                  
                                        <tr>
                                            <td>
                                               Use  
                                            </td>
                                            <td>
                                            For commercial projects with small computational power 
                                            </td>
                                            <td>
                                            For commercial projects with medium computational power
                                            </td>
                                            <td>
                                           For commercial projects with large computational power
                                            </td>
                                        </tr>
                                        <tr>
                                             <td>Scalable for larger projects </td>
                                            <td>No. Annual usage is capped. </td>
                                            <td>Yes </td>
                                             <td>Yes </td>                                
                                         </tr>
                                          <tr >
              <td>Number of messages </td>
              <td >10 million/year<br>(~17,280/day) </td>
              <td >70 million/year per unit<br>(~870,000/day per unit) </td>
              <td >More than 150 million/year per unit<br>(~870,000/day per unit) </td>
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
            
                                        
                                    
                               
    </tbody>

                                     
                                </table>
                            </div>
                            <!-- /.table-responsive -->

                            <div class="box-footer">
                         <h3>Data Processing Calculator</h3>
        <form method="POST" action= "<?php echo $_SERVER['PHP_SELF'];?>" >
           No of devices : <input type="number" name="No_of_Devices"/>
           Time taken per data : <input type="number" name="No_of_Msg"/>
            <input type="submit" value="Calculate"/>
           
        </form>
                            </div>

                        </form>

                    </div>
                    <!-- /.box -->


                    
                            <!-- /.product -->
                        


                       
                <!-- /.col-md-9 -->

               
                <!-- /.col-md-3 -->

            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->

        <!-- *** FOOTER ***
 _________________________________________________________ -->
       <?php include "footer.php"; ?>



</body>

</html>