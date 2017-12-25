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
        AgroTech-Vegetables
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
    <!-- *** TOPBAR ***
 _________________________________________________________ -->
    <?php include "navbar.php"; ?>


    <!-- *** NAVBAR END *** -->

    <div id="all">

        <div id="content">
            <div class="container">

                <div class="col-md-12">

                    <ul class="breadcrumb">
                        <li><a href="#">Home</a>
                        </li>
                        <li>Vegetables</li>
                    </ul>

                    <div class="box">
                        <h1>Vegetables</h1>
                        <p>In our Vegetables section, we offer wide selection of the best products we have found and carefully selected in Malaysia. Note that all prices subjected to 1kg of particular vegetables and in RM currency.</p>
                    </div>

                    <div class="box info-bar">
                        <div class="row">
                            <div class="col-sm-12 col-md-4 products-showing" ">
                                Showing <strong>12</strong> of <strong>25</strong> products
                            </div>

                            <div class="col-sm-12 col-md-8  products-number-sort">
                                <div class="row">
                                    <form class="form-inline">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="products-number">
                                                <strong>Show</strong>  <a href="#" class="btn btn-default btn-sm btn-primary">12</a>  <a href="#" class="btn btn-default btn-sm">24</a>  <a href="#" class="btn btn-default btn-sm">All</a> products
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="products-sort-by">
                                                <strong>Sort by</strong>
                                                <select name="sort-by" class="form-control">
                                                    <option>Price</option>
                                                    <option>Name</option>
                                                    <option>Sales first</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row products" ">
                    
                    <?php include "process/connection.php"; ?>

                            <?php 
                           

                            $sql="SELECT * FROM vegetables";
                            if (mysqli_query($con,$sql)){
                                $result = mysqli_query($con,$sql);
                            if (mysqli_num_rows($result) > 0){

                                while($row = mysqli_fetch_assoc($result)) {?>
                        <div class="col-md-3 col-sm-4" >
                         <form method="post" action="basket.php?action=add&code='<?php echo $row['id']; ?>'&type=vegetables">
                            <div class="product" ">
                                    <div class="flip-container">
                                        <div class="flipper">
                                            <div class="front">
                                                <a href="#">
                                                    <?php echo "<img src='".$row['image']."' alt='' class='img-responsive'>" ?>
                                                </a>
                                            </div>
                                            <div class="back">
                                                <a href="#">
                                        <?php echo "<img src='".$row['image']."' alt='' class='img-responsive'>" ?>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#" class="invisible">
                                        <?php echo "<img src='".$row['image']."' alt='' class='img-responsive'>" ?>
                                    </a>
                                    <div class="text">
                                        <?php echo " <h3><a href='#'>".$row['vegetables']."</a></h3>" ?>
                                       
                                        <p class="price">
                                        RM &nbsp<?php echo $row['price']?><br>
                                        Quantity:&nbsp<input type="number" name="quantity" id="quantity" value="1" size="2" />&nbsp kg
                                        </p>
                                        <p class="buttons">
                                        <input type="submit" value="Add to Cart"></p>
                                    </div>
                                <!-- /.text -->
                                </div>
                           </form>
                            <!-- /.product -->
                            </div>


              
                                   

                              <?php  }
                            }
                            }
                   
                            ?>
</div>

                    <!-- /.products -->

                    <div class="pages">

                        <p class="loadMore">
                            <a href="#" class="btn btn-primary btn-lg"><i class="fa fa-chevron-down"></i> Load more</a>
                        </p>

                        <ul class="pagination">
                            <li><a href="#">&laquo;</a>
                            </li>
                            <li class="active"><a href="#">1</a>
                            </li>
                            <li><a href="#">2</a>
                            </li>
                            <li><a href="#">3</a>
                            </li>
                            <li><a href="#">4</a>
                            </li>
                            <li><a href="#">5</a>
                            </li>
                            <li><a href="#">&raquo;</a>
                            </li>
                        </ul>
                    </div>


                </div>
                <!-- /.col-md-9 -->

            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->


        <!-- *** FOOTER ***
 _________________________________________________________ -->
        <?php include "footer.php"; ?>
        <!-- /#footer -->

        <!-- *** FOOTER END *** -->




        <!-- *** COPYRIGHT ***
 _________________________________________________________ -->
     
    <!-- /#all -->


    

    <!-- *** SCRIPTS TO INCLUDE ***
 _________________________________________________________ -->
    <!-- <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/modernizr.js"></script>
    <script src="js/bootstrap-hover-dropdown.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/front.js"></script>
 -->





</body>

</html>