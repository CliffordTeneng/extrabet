<?php 
include_once 'conn.php';
//include_once '../functions/database_functions.php';


function loginUser($username, $password){

    global $conn;
    $sql = "select * from users where username ='$username'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) >0 ) {

        $_SESSION['username'] = $username;

        while($row = $result->fetch_assoc()) {

            if($password == $row['password']){
                $_SESSION['Username'] = $username;
                $_SESSION['Password'] = $password;
                header("location: admin/home.php");
            }else{
                header("Location: admin/index.php?status=wp");// wp for wrong password that is password miss match ;/
            }
        }
        
    } else{
        header("Location: admin/index.php?status=dext");//dext for user doesn't exit
        return;
    }

mysqli_close($conn);

}



function logout(){
    if(isset($_SESSION['Username']) && isset($_SESSION['Password'])){

        unset($_SESSION['Username']);
        unset($_SESSION['Password']);
        session_destroy();
        header("Location: admin/index.php");
        echo 1;

    }
}

function selectAll($table){
    global $conn;
    $results = array();
    $sql = "select * from ".$table." order by date_input asc";
    $result = $conn->query($sql);
    if($result->num_rows>0){
        while($row = $result->fetch_assoc()){
            array_push($results, $row);
        }
    }
    return $results;
}

function number_of_rows($table, $teamA, $teamB, $tip, $date_input){
    global $conn;
    $sql = "select * from ".$table." where teamA = '$teamA' and teamB = '$teamB' and tip = '$tip' and date_input = '$date_input'";
    $result = mysqli_query($conn,$sql);
    
    return $result->num_rows;

}
function number_of_rowss($table, $teamA, $teamB, $date_input){
    global $conn;
    $sql = "select * from ".$table." where teamA = '$teamA' and teamB = '$teamB' and date_input = '$date_input'";
    $result = mysqli_query($conn,$sql);
    
    return $result->num_rows;

}
function number_of_rowsst($table){
    global $conn;
    $sql = "select * from ".$table;
    $result = mysqli_query($conn,$sql);
    
    return $result->num_rows;

}

function update($table, $attribute, $value, $md5_id){
    global $conn;
    $sql = "update ".$table." set ".$attribute."='$value' where id = '$md5_id'";
    $result = $conn->query($sql);
    return $result;
}


function addMatch($match_nameM, $teamA, $teamB, $tip, $date_input){
    global $conn;

    if (number_of_rows("matches", $teamA, $teamB, $tip, $date_input) > 0 ) {

        // echo "<script> alert('This match already exit') </script>";//already exits
        echo "<script> window.location.href = 'admin/home.php?status=regs';</script>";
        
    } else{
        $sql2 = "insert into matches(match_name, teamA, teamB, tip, date_input) values ('{$match_nameM}', '{$teamA}', '{$teamB}', '{$tip}', '{$date_input}')";
        $sql3 = "insert into match_result(match_name, teamA, teamB, tip, date_input) values ('{$match_nameM}', '{$teamA}', '{$teamB}', '{$tip}', '{$date_input}')";
        $result = mysqli_query($conn,$sql2);
        $result2 = mysqli_query($conn,$sql3);
        echo "<script> window.location.href = 'admin/home.php?status=success'; </script>";
        
    }

mysqli_close($conn);

}

function addMatchResult($datas){

    global $conn;

    $rows = selectAll("match_result");

        foreach($rows as $row) {
            foreach($datas as $value) {
                if($row['id'] == $value->id){
                     update('match_result', 'result', $value->result, $value->id);
                }
                if($row['id'] == $value->id && $value->status == false){
                     update('match_result', 'status', 0 , $value->id);
                }
                if($row['id'] == $value->id && $value->status == true){
                     update('match_result', 'status', 1 , $value->id);
                }
               
                
            }
        }
        echo 1;
mysqli_close($conn);

}

function addUpcomingMatch($match_nameU, $teamA, $teamB, $date_input){

    global $conn;

    if (number_of_rowss("match_upcoming", $teamA, $teamB, $date_input) > 0 ) {

        // echo "<script> alert('This match already exit') </script>";//already exits
        echo "<script> window.location.href = 'admin/home.php?status=regs';</script>";
        
    } else{
        $sql2 = "insert into match_upcoming(match_name, teamA, teamB, date_input) values ('{$match_nameU}', '{$teamA}', '{$teamB}', '{$date_input}')";
        $result = mysqli_query($conn,$sql2);
        echo "<script> window.location.href = 'admin/home.php?status=success'; </script>";
        
    }

mysqli_close($conn);

}
