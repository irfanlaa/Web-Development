 <?php 
    if(!empty($_GET["action"])) {
        switch($_GET["action"]) {
           case "add":  
            $sql1="SELECT * FROM vegetables WHERE id = " . $_GET["code"];
            //WHERE fruit='" . $_GET["fruit"] . "'
            if (mysqli_query($con,$sql1)){
            $result1 = mysqli_query($con,$sql1);
            if (mysqli_num_rows($result1) > 0){

                if(!empty($_POST["quantity"])) {
                      while($productByCode1 = mysqli_fetch_assoc($result1)) {
                        $itemArray1 = array($productByCode1["id"]=>array('name'=>$productByCode1["vegetables"], 'image'=>$productByCode1["image"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode1["price"]));
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

                            $_SESSION['cart_item'] = array_merge($_SESSION['cart_item'],$itemArray1);
                          
                        
                        // }
                    } else {

                        $_SESSION['cart_item'] = $itemArray1;

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
