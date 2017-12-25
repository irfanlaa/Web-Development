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
        AgroTech-Analysis
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
    <script src="js/Chart.bundle.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link rel="shortcut icon" href="favicon.png">



</head>

<body>
    <!-- *** TOPBAR ***
 _________________________________________________________ -->
   <?php include "navbar.php";?> 
   <?php include "process/connection.php"; ?>

    <div id="all">

        <div id="content">
            <div class="container">

                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a>
                        </li>
                        <li>Price Analysis</li>
                    </ul>
                </div>

                <div class="col-md-9" id="chart">

                    <div class="box">

                       

                            <h1>Popular demand</h1>
                            <p class="text-muted">Price Analysis</p>
                            <div class="table-responsive">
                                 <label>Type of fruits</label>
                            <select id="data2" class="form-control select2" style="width: 100%;">
                                <option selected="selected">Select Type of fruits</option>
                                <option value="durian">Durian-Musang King</option>
                                <option value="mango">Mango-Harumanis</option>
                                <option value="grape">Seedless Grapes-Autumn Royal</option>
                             
                            </select><br>
                        <button onclick="plot_graph()" id="plot_button" class="btn btn-block btn-primary">Analyse
                        </button>
                                <table class="table">


                                    <div class="">

                           
                        <!-- /.form-group -->
                    </div>
                                    <canvas id="myChart" width="100" height="100"></canvas>




<script>
   function plot_graph() {

        var e = document.getElementById("data2");
        var data2Value = e.options[e.selectedIndex].value;
        var url = "http://localhost:8080//Website%20IPPI%202.0/process/chartprocess.php?data2="+ data2Value;

        $.ajax({
            url: url,
            method: "GET",
                      success: function (data) {
                var data2 = [];
                var year = [];
                
                alert("Plotting Sensor Data Graph")
                for (var i in data) {
                    console.log(data[i]);
                    data2.push(data[i][data2Value]);
                    year.push(data[i].year);
                }

                var chartdata = {
                    labels: year,
                    datasets: [
                        {
                            label: data2Value,
                            backgroundColor: ' #f5b7b1 ',
                            borderColor: '  #f1948a  ',
                            hoverBackgroundColor: '#ECC5C0',
                            hoverBorderColor: '#ECC5C0',
                            data: data2
                        }
                    ]
                };

                var ctx = $("#myChart");

                var barGraph = new Chart(ctx, {
                    type: 'line',
                    data: chartdata
                });
            },
            error: function (data) {
                console.log(data);
        
            }
        })
    }

// var myChart = new Chart(ctx, {
//     type: 'line',
//     data: {
//         labels: ["2011", "2012", "2013", "2014", "2015", "2016"],
//         datasets: [{
//             label: 'Price of the D24 Durian/kg',
             
//             data: [9,12,10,13,16,19], 
//             backgroundColor: [
//                 'rgba(255, 99, 132, 0.2)',
//                 'rgba(54, 162, 235, 0.2)',
//                 'rgba(255, 206, 86, 0.2)',
//                 'rgba(75, 192, 192, 0.2)',
//                 'rgba(153, 102, 255, 0.2)',
//                 'rgba(255, 159, 64, 0.2)'
//             ],
//             borderColor: [
//                 'rgba(255,99,132,1)',
//                 'rgba(54, 162, 235, 1)',
//                 'rgba(255, 206, 86, 1)',
//                 'rgba(75, 192, 192, 1)',
//                 'rgba(153, 102, 255, 1)',
//                 'rgba(255, 159, 64, 1)'
//             ],
//             borderWidth: 1
//         }]
//     },
//     options: {
//         scales: {
//             yAxes: [{
//                 ticks: {
//                     beginAtZero:true
//                 }
//             }]
//         }
//     }
// }); 
</script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/autocomplete.js/0.29.0/autocomplete.jquery.min.js"></script>
<p> Sources: https://www.zauba.com/import-DURIAN+FRUIT+FRESH-hs-code.html <br>
    http://animagro.blogspot.my/2010/11/cashflow-of-durian.html<br>
    https://www.thestar.com.my/news/nation/2015/05/24/mangoes-for-rm40/</p>
                                     
                                </table>
                            </div>
                            <!-- /.table-responsive -->

                           

                     

                    </div>
                    <!-- /.box -->


                    
                            <!-- /.product -->
                        


                       
                <!-- /.col-md-9 -->

               
                <!-- /.col-md-3 -->

            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->

        

       <?php include "footer.php"; ?>



</body>

</html>