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
                        <li>User Channel</li>
                    </ul>
                </div>

                <div class="col-md-9" id="basket">

                    <div class="box">

                        <form method="post" action="checkout1.php?total=$item_total">

                            <h1>User Channel</h1>
                            <p class="text-muted">My Channel</p>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th >Channel Name</th>
                                            <th>Date Created</th>
                                            <th>View</th>

                                         
                                        </tr>
                                    </thead>
                                    <tbody>

                               
                                  
<?php

while($channel=mysqli_fetch_assoc($result)){
  echo "<tr>";  
  echo "<td >".$channel['ChannelName']."</td>";
  echo "<td>".$channel['DateCreated']."</td>";
  echo "<td>".'<input type="button"  value="View" onclick="window.location=\'http://localhost/session/detailview.php\'"/>'."</td>";
  echo "</tr>";
}

//mysql_close($connection); // Closing Connection

?>
            
                                        
                                    
                               
</tbody>

                                     
</table>
</div>
                     
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