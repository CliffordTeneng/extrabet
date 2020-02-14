<?php
session_start();

require "../includes/functions.php";

if(!isset($_SESSION['Username']) && !isset($_SESSION['Password'])){
  header('location: index.php');
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Admin | Exact Bet</title>

    <!-- Fontfaces CSS-->
    <link href="../css/font-face.css" rel="stylesheet" media="all">
    <link href="../vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="../vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="../vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="../vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="../vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="../vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="../vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="../vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="../vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../css/theme.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="../css/adminstyle.css">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop3 d-none d-lg-block">
            <div class="section__content section__content--p35">
                <div class="header3-wrap">
                    <div class="header__logo">
                        <a href="../#">
                            <!-- logo goes here -->
                        </a>
                    </div>
                    <div class="header__navbar">
                        <ul class="list-unstyled" style="float: left;">
                            <li class="has-sub">
                                <a href="../#">
                                    <i class="fas fa-tachometer-alt"></i>Dashboard
                                    <span class="bot-line"></span>
                                </a>
                           </ul>
                    </div>
                    <div class="header__tool">
                        
                        <div class="account-wrap">
                            <div class="account-item account-item--style2 clearfix js-item-menu">
                                <div class="image">
                                    <img src="../images/pat.png" alt="John Doe" />
                                </div>
                                <div class="content">
                                    <a class="js-acc-btn" href="../#">Administration Area</a>
                                        <button type="submit" id="logout" class="au-btn au-btn-icon au-btn--green au-btn--small " style="margin-left:10px; background-color: #746d6d; ">
                                            Logout</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- END HEADER DESKTOP-->

        <!-- HEADER MOBILE-->
        <header class="header-mobile header-mobile-2 d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <div class="account-wrap">
                            <div class="account-item account-item--style2 clearfix js-item-menu">
                                <div class="image">
                                    <img src="../images/pat.png" alt="John Doe" />
                                </div>
                                <div class="content">
                                    <a class="" href="../#">Administration Area</a>
                                </div>
                            </div>
                        </div>
                        <div class="con" style="float: right;">
                            <!-- logo goes here -->
                            <button type="submit" id="logout" class="au-btn au-btn-icon au-btn--green au-btn--small logout " style="margin-left:10px; background-color: #746d6d; ">
                                            Logout</button>
                        </div>
                    </div>
                </div>
            </div>
        </header>
            <hr class="line-seprate">

            <section class="welcome p-t-10">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 style="margin-top: 20px; border-left: 7px solid  #746d6d; width: fit-content; padding: 10px 0px 10px 10px; text-align:" class="title-5"> Match History
                            </h3>
                        </div>
                    </div>
                </div>
            </section>


            <!-- Edit Matches TABLE-->
            <section class="p-t-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-data__tool">
                                <div class="table-data__tool-left">
                                    
                                </div>
                                <div class="table-data__tool-right">
                                       <a href="../admin/home.php"> <button class="au-btn au-btn-icon au-btn--green au-btn--small" id="clears"  style=" background-color: #746d6d; ">Back</button></a>
                                    
                                </div>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-10" style="margin:auto ">
                                    <h3 class="title-5" style="margin-bottom: 10px; margin-top: 20px" ></h3>
                                    <div class="table-responsive text-nowrap">
                                            <!--Table-->
                                            <table class="table table-striped">

                                            <!--Table head-->
                                            <thead class="thead-dark">
                                                <tr>
                                                <th>#</th>
                                                <th style="text-align: center;">Date</th>
                                                <th style="text-align: center;" colspan="3">Matches</th>
                                                <th style="text-align: center;">Tips</th>
                                                <th style="text-align: center;">Result</th>
                                                </tr>
                                            </thead>
                                            <!--Table head-->

                                            <!--Table body-->
                                            <tbody>
                                            <?php $count = 0; $rols = selectAll("match_result"); foreach($rols as $rol): $count = $count + 1;?>
                                            
                                                <tr>
                                                <th scope="row"><?= $count?></th>
                                                <td style="text-align: center;"><?= $rol['date_input']?></td>
                                                <td style="text-align: center;"><?= $rol['teamA']?></td>
                                                <td style="text-align: center;">Vs</td>
                                                <td style="text-align: center;"><?= $rol['teamB']?></td>
                                                <td style="text-align: center;"><?= $rol['tip']?></td>
                                                <?php if(!$rol["result"]): ?>
                                                <td style="text-align: center;">no results yet</td>
                                                <?php else: ?> 
                                                <td style="text-align: center;"><?= $rol['result']?></td>
                                                <?php endif; ?>   
                                                </tr>
                                            <?php endforeach; ?>   
                                            </tbody>
                                            <!--Table body-->


                                            </table>
                                            <!--Table-->
                                        </div>
                                    </section>
                                    <!--Section: Live preview-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- COPYRIGHT-->
            <section>
                <div class="container" style="padding-bottom: 0px; margin-top: 140px; margin-bottom: 0px">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright" style="padding-bottom: 0px; margin-top: 50px; margin-bottom: 0px">
                                <p>Copyright © 2020 Exact Bet. All rights reserved..</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END COPYRIGHT-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="../vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="../vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="../vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="../vendor/slick/slick.min.js">
    </script>
    <script src="../vendor/wow/wow.min.js"></script>
    <script src="../vendor/animsition/animsition.min.js"></script>
    <script src="../vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="../vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="../vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="../vendor/circle-progress/circle-progress.min.js"></script>
    <script src="../vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="../vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="../js/main.js"></script>
</body>

</html>
<!-- end document-->