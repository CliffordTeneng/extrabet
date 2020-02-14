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
        <!-- END HEADER MOBILE -->

            <!-- WELCOME-->
            <section class="welcome p-t-10">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="title-4">Welcome to the Admin Area!
                            </h1>
                            <hr class="line-seprate">
                            <h3 style="margin-top: 20px; border-left: 7px solid  #746d6d; width: fit-content; padding: 10px 0px 10px 10px; text-align:" class="title-5">Add Matches
                            </h3>
                        </div>
                    </div>
                </div>
            </section>
           
            <!-- END WELCOME-->

            <!-- Matches TABLE-->
            <section class="p-t-20" style="padding-top:0px">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-data__tool" style="margin-bottom:0px">
                                <div class="table-data__tool-left">
                                    
                                </div>
                                <div class="table-data__tool-right">
                                    <button class="au-btn au-btn-icon au-btn--green au-btn--small add_match_btn">
                                        <i class="zmdi zmdi-plus"></i>Add a Match</button>
                                        <button class="au-btn au-btn-icon au-btn--green au-btn--small clearM" id="clears"  style=" background-color: #746d6d; ">Clear</button>
                                    
                                </div>
                            </div>
                            <div class="container add_match">
                                <div class="row" style="margin-top:20px">
                                    <div class="col-sm-8" style="margin:auto ">

                                        <form action="../actions.php" method="post">
                                            <div class="form-group">
                                                <label for="matchName">Name of Match</label>
                                                <input required type="Text" class="form-control" name="matchNameM" id="matchNameM" aria-describedby="matchName" placeholder="Match Name">
                                            </div>
                                            <div class="form-group">
                                                <label for="team">Teams</label>
                                                <div class="form-row mb-4">
                                                    
                                                    <div class="col">
            
                                                        <input required type="text" name="teamAM" id="teamAM"  class="form-control" placeholder="Team A">
                                                    </div>
                                                        <span style="margin:0px 10px">Vs</span>
                                                    <div class="col">
                                                        
                                                        <input required type="text" name="teamBM" id="teamBM" class="form-control" placeholder="Team B">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="tip">Tips</label>
                                                <label for="date" style="margin-left:47%">Date</label>
                                                <div class="form-row mb-4">
                                                    <div class="col">
            
                                                        <input required type="text" name="tipM" id="tipM" class="form-control" placeholder="Add Tip">
                                                    </div>
                                                        <span style="margin:0px 10px"></span>
                                                    <div class="col">
                                                        
                                                        <input required type="date" name="dateM" id="dateM" class="form-control" placeholder="Date">
                                                    </div>
                                                </div>
                                            </div>
                                            <?php 
                                                if(isset($_GET['status']) && $_GET['status'] == "regs"){
                                                    echo "<script> alert('This match already exit') </script>";
                                                }
                                                if(isset($_GET['status']) && $_GET['status'] == "success"){
                                                    echo "<script> alert('Match added successfully!') </script>";
                                                }
                                                if(isset($_GET['status']) && $_GET['status'] == "successs"){
                                                    echo "<script> alert('Results were added successfully!') </script>";
                                                }
                                                  
                                                    
                                                ?>
                                            
                                            <button type='submit' class="au-btn au-btn-icon au-btn--green au-btn--small" name="saveM" id="saveM" style="float:right">Save</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END Matches TABLE-->
            <hr class="line-seprate">

            <section class="welcome p-t-10">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 style="margin-top: 20px; border-left: 7px solid  #746d6d; width: fit-content; padding: 10px 0px 10px 10px; text-align:" class="title-5">Add Results to Matches
                            </h3>
                        </div>
                    </div>
                </div>
            </section>


            <!-- Edit Matches TABLE-->
            <section class="p-t-20" style="padding-top:0px">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-data__tool" style="margin-bottom:0px">
                                <div class="table-data__tool-left">
                                    
                                </div>
                                <div class="table-data__tool-right">
                                    <button class="au-btn au-btn-icon au-btn--green au-btn--small result_btn">
                                        <i class="zmdi zmdi-plus"></i>Add Result</button>
                                        <button class="au-btn au-btn-icon au-btn--green au-btn--small clearR" id="clears"  style=" background-color: #746d6d; ">Clear</button>
                                    
                                </div>
                            </div>
                            <div class="container result">
                                <div class="row" style="margin-top:20px">
                                    <div class="col-sm-10" style="margin:auto ">
                                    <div class="table-responsive text-nowrap">
                                    <form style="padding: 0px; border: 0px; border-radius: 0px; width: 100%;" action="../actions.php" method="post">
                                            <!--Table-->
                                            <table class="table table-striped">

                                            <!--Table head-->
                                            <thead class="thead-dark">
                                                <tr>
                                                <th style="text-align: center;">#</th>
                                                <th style="text-align: center;">Date</th>
                                                <th style="text-align: center;" colspan="3">Matches</th>
                                                <th style="text-align: center;">Tips</th>
                                                <th style="text-align: center;">Result</th>
                                                <th style="text-align: center;">Won</th>
                                                <th style="text-align: center;">Lost</th>
                                                </tr>
                                            </thead>
                                            <!--Table head-->
                                                
                                            <!--Table body-->
                                            <tbody>
                                                <?php $count = 0; $rols = selectAll("match_result"); foreach($rols as $rol): $count = $count + 1;?>
                                                    <tr>
                                                    <th scope="row" style="text-align: center;"><?= $count?></th>
                                                    <td style="text-align: center;"><?= $rol['date_input']?></td>
                                                    <td style="text-align: center;"><?= $rol['teamA']?></td>
                                                    <td style="text-align: center;">Vs</td>
                                                    <td style="text-align: center;"><?= $rol['teamB']?></td>
                                                    <td style="text-align: center;"><?= $rol['tip']?></td>
                                                    <td style="text-align: center; margin: 0px;  width: 150px;"><input class="results<?= $count?> result" required style=" width: 150px; margin: 0px" type="Text" class="form-control" placeholder="Input Result"> </td>
                                                    <td style="text-align: center;"><input style="position: inherit;" class="<?= $count?>won <?= $rol['id']?>" required class="form-check-input" type="radio" name='won<?= $count?>'> Won </td>
                                                    <td style="text-align: center;"><input style="position: inherit;" class="<?= $count?>lost <?= $rol['id']?>" required class="form-check-input" type="radio" name='won<?= $count?>'> Lost </td>
                                                    </tr>
                                                <?php endforeach; ?> 
                                            </tbody>
                                            <!--Table body-->

                                            <tfoot>
                                                <tr>
                                                    <td  colspan="9">
                                                        <button class="au-btn au-btn-icon au-btn--green au-btn--small" id="saveR"  style="float:right">Save</button>
                                                    </td>
                                                </tr>
                                            </tfoot>
                                            </table>
                                        </form>
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
            <!-- END Edit Matches TABLE-->
            <hr class="line-seprate">

            <section class="welcome p-t-10">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 style="margin-top: 20px; border-left: 7px solid  #746d6d; width: fit-content; padding: 10px 0px 10px 10px; text-align:" class="title-5">Add UpComing Matches
                            </h3>
                        </div>
                    </div>
                </div>
            </section>


             <!-- Matches TABLE-->
             <section class="p-t-20" style="padding-top:0px">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-data__tool" style="margin-bottom:0px">
                                <div class="table-data__tool-left">
                                    
                                </div>
                                <div class="table-data__tool-right">
                                    <button class="au-btn au-btn-icon au-btn--green au-btn--small up_coming_btn">
                                        <i class="zmdi zmdi-plus"></i>Add UpComing Match</button>
                                        <button class="au-btn au-btn-icon au-btn--green au-btn--small clearU" id="clears"  style=" background-color: #746d6d; ">Clear</button>
                                    
                                </div>
                            </div>
                            <div class="container up_coming">
                                <div class="row" style="margin-top:20px;margin-bottom: 60px">
                                    <div class="col-sm-8" style="margin:auto ">

                                        <form action="../actions.php" method="post">
                                            <div class="form-group">
                                                <label for="matchName">Name of Match</label>
                                                <input required type="Text" class="form-control" name="matchNameU" id="matchNameU" aria-describedby="matchName" placeholder="Match Name">
                                            </div>
                                            <div class="form-group">
                                                <label for="team">Teams</label>
                                                <div class="form-row mb-4">
                                                    
                                                    <div class="col">
            
                                                        <input required type="text" name="teamAU" id="teamAU" class="form-control" placeholder="Team A">
                                                    </div>
                                                        <span style="margin:0px 10px">Vs</span>
                                                    <div class="col">
                                                        
                                                        <input required type="text" name="teamBU"  id="teamBU" class="form-control" placeholder="Team B">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="date">Date</label>
                                                <input required type="date" class="form-control" name="dateU" id="dateU" aria-describedby="date" placeholder="Add a date">
                                            </div>
                                            <button type='submit' class="au-btn au-btn-icon au-btn--green au-btn--small" name="saveU"  style="float:right">Save</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END Matches TABLE-->
            <hr class="line-seprate">


            <div class="container" style="margin-top: 40px">
                <div class="row">
                    <div class="col-sm-12">
                    <div class="table-data__tool">
                                <div class="table-data__tool-left">
                                    
                                </div>
                                <div class="table-data__tool-right">
                                   <a href="../history"> <button class="au-btn au-btn-icon au-btn--green au-btn--small">See all Your Match History</button></a>
                                    
                                </div>
                            </div>
                    </div>
                </div>
            </div>

            <!-- COPYRIGHT-->
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright" style="padding-bottom: 0px; margin-top: 50px">
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
    <script src="../js/handle.js"></script>

</body>

</html>
<!-- end document-->