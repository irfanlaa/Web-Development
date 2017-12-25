 
 <div id="top">
        <div class="container">
            <div class="col-md-6 offer" data-animate="fadeInDown">
                <a href="#" class="btn btn-success btn-sm" data-animate-hover="shake">Offer of the day</a>  <a href="#">Get your daily nutrients here with an affordable price !</a>
            </div>
            <div class="col-md-6" data-animate="fadeInDown">
                <ul class="menu">
                <?php 
                session_start();
                // echo $_SESSION['Username'];
                if (@$_SESSION['Username']!="")  { 
                    // $username= $_POST["Username"];
                    ?> 
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Hello, <?php echo $_SESSION['Username']; ?> 
                    <span class="caret"></span></a>
                   
                      <li><a href="logout.php">Log out</a></li> 

                    </li>
                 
                    <?php  }  else{ echo "";
                    ?>
                    <li><a href="#" data-toggle="modal" data-target="#login-modal">Login</a>
                    </li>
                    <li><a href="register.php">Register</a>
                    </li><?php } ?>
                    
                    <li><a href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
            <div class="modal-dialog modal-sm">

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="Login">Customer login</h4>
                    </div>
                    <div class="modal-body">
                        <form action="process/login_process.php" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Enter Username" name="uname" id="uname" required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Enter Password" name="psw" id="psw" required>
                            </div>

                            <p class="text-center">
                                <button class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
                            </p>

                        </form>

                        <p class="text-center text-muted">Not registered yet?</p>
                        <p class="text-center text-muted"><a href="register.php"><strong>Register now</strong></a>! It is easy and done in 1&nbsp;minute and gives you access to special discounts and much more!</p>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- *** TOP BAR END *** -->

    <!-- *** NAVBAR ***
 _________________________________________________________ -->

    <div class="navbar navbar-default yamm" role="navigation" id="navbar">
        <div class="container">
            <div class="navbar-header">

                <a class="navbar-brand home" href="index.php" data-animate-hover="bounce">
                    <img src="img/logo.jpg" alt="AgroTech-logo" class="hidden-xs">
                    <img src="img/logo.jpg" alt="AgroTech-logo" class="visible-xs"><span class="sr-only">Agrotech-Homepage</span>
                </a>
                <form action="search.php?go" method="POST" id="searchform"> 
                <div class="navbar-buttons">
                    <input type="search" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-align-justify"></i>
                    </input>
                
                    <button type="submit" name="submit" value="search" class="navbar-toggle" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle search</span>
                        <i class="fa fa-search"></i>
                    </button></form>
                    <a class="btn btn-default navbar-toggle" href="basket.php">
                        <i class="fa fa-shopping-cart"></i>  <span class="hidden-xs">Shopping cart</span>
                    </a>
                </div>
            </div>
            <!--/.navbar-header -->

            <div class="navbar-collapse collapse" id="navigation">

                <ul class="nav navbar-nav navbar-left">
                    <li class="active"><a href="index.php">Home</a>
                    </li>
                 <li class="dropdown yamm-fw">
                        <a href="fruits.php" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Products <b class="caret"></b></a>
                       <ul class="dropdown-menu">
                          <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-sm-3">
                                        
                                         <ul>
                                                <li><a href="fruits.php">Fruits</a>
                                                </li>
                                                </ul>
                                                <ul>
                                            <li><a href="vegetables.php">Vegetables</a>
                                                </li></ul>
                                 
                                        </div>
                     
                                    </div>
                                </div>
                                <!-- /.yamm-content -->
                           </li>
                        </ul>
                   <!-- </li>-->

                    <li class="dropdown yamm-fw">
                        <a href="vegetables.php" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Channel<b class="caret"></b></a>
                       <ul class="dropdown-menu">
                       <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            
                                            <ul>
                                            	<li><a href="channel.php">User Channel</a>
                                                </li>
                                                <li><a href="processing.php">Data Processing</a>
                                                </li>
                                                </ul>
                            
                                    </div>
                                </div>
                                <!-- /.yamm-content -->
                           </li>
                        </ul>
                   <!-- </li>-->

                    <li class="dropdown yamm-fw">
                        <a href="vegetables.php" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Analysis<b class="caret"></b></a>
                       <ul class="dropdown-menu">
                       <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            
                                            <ul>
                                                <li><a href="chart.php">Fruits Analysis</a>
                                                </li>
                                                </ul>
                                             
                                    </div>
                                </div>
                                <!-- /.yamm-content -->
                           </li>
                        </ul>

                    <li class="dropdown yamm-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Navigate <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5>Shop</h5>
                                            <ul>
                                                <li><a href="index.php">Homepage</a>
                                                </li>
                                                <li><a href="fruits.php">Category - fruits</a>
                                                </li>
                                                <li><a href="vegetables.php">Category - vegetables</a>
                                                </li>
                                         
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                             <h5>User</h5>
                                            <ul>
                                                <li><a href="register.php">Register / login</a>
                                                </li>
                                                <li><a href="#">User Channel</a>
                                                </li>
                                                <li><a href="#">Analysis</a>
                                                </li>
                                               <!-- <li><a href="#">Wishlist</a>
                                                </li>-->
                                                <li><a href="customer-account.php">Customer account / change password</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>Order process</h5>
                                            <ul>
                                                <li><a href="basket.php">Shopping cart</a>
                                                </li>
                                                <li><a href="checkout1.html">Checkout - step 1</a>
                                                </li>
                                                <!--<li><a href="checkout2.html">Checkout - step 2</a>
                                                </li>
                                                <li><a href="checkout3.html">Checkout - step 3</a>
                                                </li>
                                                <li><a href="checkout4.html">Checkout - step 4</a>
                                                </li>-->
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>About us</h5>
                                            <ul>
                                                <li><a href="text.php">Terms and conditions</a>
                                                </li>
                                               <!-- <li><a href="post.html">Blog Post</a>
                                                </li>
                                                <li><a href="faq.html">FAQ</a>
                                                </li>
                                                <li><a href="text.html">Text page</a>
                                                </li>
                                                <li><a href="text-right.html">Text page - right sidebar</a>
                                                </li>
                                                <li><a href="404.html">404 page</a>
                                                </li>-->
                                                <li><a href="contact.php">Contact</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.yamm-content -->
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>
            <!--/.nav-collapse -->

            <div class="navbar-buttons">

                <div class="navbar-collapse collapse right" id="basket-overview">
                    <a href="basket.php" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span class="hidden-sm">Shopping cart</span></a>
                </div>
                <!--/.nav-collapse -->

                <div class="navbar-collapse collapse right" id="search-not-mobile">
                    <button type="button" class="btn navbar-btn btn-primary" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle search</span>
                        <i class="fa fa-search"></i>
                    </button>
                </div>

            </div>

            <div class="collapse clearfix" id="search">

                <form class="navbar-form" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-btn">

			<button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>

		    </span>
                    </div>
                </form>

            </div>
            <!--/.nav-collapse -->

        </div>
        <!-- /.container -->
    </div>