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
        AgroTech-Cart
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

   <?php 
   //session_start();
   include "process/connection.php"; 
   //include "basket1.php"; ?>
    <?php 
    if(!empty($_GET["action"])) {
        switch($_GET["action"]) {
           case "add":  
            $sql="SELECT * FROM ". $_GET["type"] ." WHERE id = " . $_GET["code"];
            //WHERE fruit='" . $_GET["fruit"] . "'
            if (mysqli_query($con,$sql)){
            $result = mysqli_query($con,$sql);
            if (mysqli_num_rows($result) > 0){

                if(!empty($_POST["quantity"])) {
                      while($productByCode = mysqli_fetch_assoc($result)) {
                        if ($_GET["type"] == "fruits") {
                            $itemArray = array($productByCode["id"]=>array('name'=>$productByCode["fruit"], 'image'=>$productByCode["image"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode["price"]));
                        }else if ($_GET["type"] == "vegetables") {
                            $itemArray = array($productByCode["id"]=>array('name'=>$productByCode["vegetables"], 'image'=>$productByCode["image"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode["price"]));
                        }

                    }
                    // $productByCode = $db_handle->runQuery("SELECT * FROM fruits WHERE id='" . $_GET["id"] . "'");
                   
                    
                    if(!empty($_SESSION['cart_item'])) {

                        // if(in_array($productByCode[0]["id"],array_keys($_SESSION['cart_item']))) {

                        //     foreach($_SESSION['cart_item'] as $k => $v) {
                        //         echo "if";

                        //             if($productByCode[0]["id"] == $k) {

                        //                 if(empty($_SESSION['cart_item'][$k]["quantity"])) {

                        //                     $_SESSION['cart_item'][$k]["quantity"] = 0;
                                        
                        //                 }

                        //                 $_SESSION['cart_item'][$k]["quantity"] += $_POST["quantity"];
                        //             }
                        //     }

                        // } else {

                            $_SESSION['cart_item'] = array_merge($_SESSION['cart_item'],$itemArray);
                          
                        
                        // }
                    } else {

                        $_SESSION['cart_item'] = $itemArray;

                    }
                }
            }
        }

            break; 


            case "remove":
            
                if(!empty($_SESSION['cart_item'])) {
                    foreach($_SESSION['cart_item'] as $k => $v) {
                            if($_GET["code"] == $k)
                                unset($_SESSION['cart_item'][$k]);              
                            if(empty($_SESSION['cart_item']))
                                unset($_SESSION['cart_item']);
                    }
                }
            break;
            case "empty":
                
                unset($_SESSION['cart_item']);
            break;
        }
        }

    ?>

   

    <!-- /#navbar -->

    <!-- *** NAVBAR END *** -->
        <?php
if(isset($_SESSION["cart_item"])){
    $item_total = 0;
?> 

    <div id="all">

        <div id="content">
            <div class="container">

                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="index.php">Home</a>
                        </li>
                        <li>Shopping cart</li>
                    </ul>
                </div>

                <div class="col-md-9" id="basket">

                    <div class="box">

                        <form method="post" action="checkout1.php?total=$item_total">

                            <h1>Shopping cart</h1>
                            <p class="text-muted">Shopping cart</p>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th colspan="2">Product</th>
                                            <th>Quantity</th>
                                            <th>Unit price</th>
                                            <th colspan="2"></th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php       
                                    foreach ($_SESSION['cart_item'] as $k  =>$item) {
                                     ?>
                                  
                                        <tr>
                                            <td>
                                               <?php echo $item["name"]; ?>
                                            </td>
                                            <td>
                                            <?php echo "<img src='".$item['image']."' alt='' class='img-responsive'>" ?>
                                            </td>
                                            <td>
                                            <?php echo $item["quantity"]; ?>  
                                            </td>
                                            <td>
                                            <?php echo $item["price"]; ?>
                                            </td>
                                            <td>
                                            <a href="basket.php?action=remove&code=<?php echo $k; ?>" class="btnRemoveAction">Remove Item</a>
                                            </td>
                                                <?php
                                            $item_total += ($item["price"]*$item["quantity"]);
                                            }
                                            ?>
                                          <td colspan="5" align=right><strong>Total:</strong> <?php echo "RM ".$item_total; ?>
                                          </td>

                                         </tr> 
                                        
                                    
                                <?php } ?>
    </tbody>

                                     
                                </table>
                            </div>
                            <!-- /.table-responsive -->

                            <div class="box-footer">
                                <div class="pull-left">
                                    <a href="category.html" class="btn btn-default"><i class="fa fa-chevron-left"></i> Continue shopping</a>
                                </div>
                                <div class="pull-right">
                                    <button class="btn btn-default"><i class="fa fa-refresh"></i> Update basket</button>
                                    <button type="submit" class="btn btn-primary" action="checkout1.php?total=$item_total">
                                    Proceed to checkout <i class="fa fa-chevron-right"></i>
                                    </button>
                                </div>
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