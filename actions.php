<?php 
session_start();

include 'includes/conn.php';
include 'includes/functions.php';


if(isset($_POST['Username']) && isset($_POST['Password'])){
    $username = $_POST['Username'];
    $password = $_POST['Password'];

    loginUser($username, md5($password));
}

if(isset($_POST['logout'])){

    logout();
}
if(isset($_POST['matchNameM']) && isset($_POST['tipM'])){
    $match_nameM = $_POST['matchNameM'];
    $teamA = $_POST['teamAM'];
    $teamB = $_POST['teamBM'];
    $tip = $_POST['tipM'];
    $date_input = $_POST['dateM'];

    addMatch($match_nameM, $teamA, $teamB, $tip, $date_input);
}


if(isset($_POST['saveResult'])){
    $saveResult = json_decode($_POST['saveResult']);

    addMatchResult($saveResult);
}


if(isset($_POST['saveU']) && isset($_POST['dateU'])){
    $match_nameU = $_POST['saveU'];
    $teamA = $_POST['teamAU'];
    $teamB = $_POST['teamBU'];
    $date_input = $_POST['dateU'];

    addUpcomingMatch($match_nameU, $teamA, $teamB, $date_input);
}