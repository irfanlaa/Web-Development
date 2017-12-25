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
      AgroTech-Register
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
                        <li>New account / Sign in</li>
                    </ul>

                </div>

                <div class="col-md-6">
                    <div class="box">
                        <h1>New account</h1>

                        <p class="lead">Not our registered customer yet?</p>
                        <p>With registration with us new world of fashion, fantastic discounts and much more opens to you! The whole process will not take you more than a minute!</p>
                        <p class="text-muted">If you have any questions, please feel free to <a href="contact.html">contact us</a>, our customer service center is working for you 24/7.</p>

                        <hr>

                        <form action="process/signup_process.php" method="post">
                            <div class="form-group">
                                <label for="name">Username</label>
                                <input type="text" class="form-control" placeholder="Enter Username" name="username" id="username" required onchange="semak()">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" placeholder="Enter Email" name="email" id="email" required onchange="menyemak()">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" placeholder="Enter Password" name="psw" id="psw" required>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-user-md"></i> Register</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="box">
                        <h1>Login</h1>

                        <p class="lead">Already our customer?</p>
                        <p class="text-muted">You can just login from here and explore our website to your heart content.</p>

                        <hr>

                         <form action="process/login_process.php" method="post">
                            <div class="form-group">
                                <label for="text">Username</label>
                                <input type="text" class="form-control" name="uname" id="uname" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="psw" id="psw" required>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
                            </div>
                        </form>
                    </div>
                </div>


            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->


        <!-- *** FOOTER ***
 _________________________________________________________ -->
        <?php include "footer.php"; ?>



</body>

</html>
<script>

function semak(){
    console.log("Done");
    jQuery.ajax({
        url:'process/checked.php',
        async: true,
        type:'POST',
        data:{username:$('#username').val()},

        dataType: 'json',
        beforeSend: function(){
            console.log("sending..."+$('#username').val());
     
        },

        success: function(response) { 
            console.log("data available:"+response);
            $('#uss').remove();
            if (response !== ""){
                $('#username').after("<tag id='uss' style= color:red;><b>YOUR USERNAME IS ALREADY TAKEN</b><br></tag>");
            }

        },
        error: function(response) { 
          //hideModal();
          $('#uss').remove();
          $('#username').after("<tag id='uss' style= color:green;><b>YOUR USERNAME IS AVAILABLE</b><br></tag>");
            console.log("Could not authenticate to server. Please check your network connection and try again." + response);
        
        }
    });

  // event.preventDefault();
}

function menyemak(){
     console.log("Done");
    jQuery.ajax({
        url:'process/checked1.php',
        async: true,
        type:'POST',
        data:{email:$('#email').val()},

        dataType: 'json',
        beforeSend: function(){
            console.log("sending..."+$('#email').val());
     
        },

        success: function(response) { 
            console.log("data available:"+response);
            $('#em').remove();
            if (response !== ""){
                $('#email').after("<tag id='em' style= color:red;><b>YOUR EMAIL IS ALREADY REGISTERED. PLEASE SIGN UP WITH ANOTHER EMAIL</b><br></tag>");
            }

        },
        error: function(response) { 
          //hideModal();
          $('#em').remove();
         $('#email').after("<tag id='em' style= color:green;><b>YOUR EMAIL IS AVAILABLE TO USE</b><br></tag>");
            // console.log("Could not authenticate to server. Please check your network connection and try again." + response);
        
        
        }
    });


}
</script>

