<?php
session_start();
// ********************** INCLUDE FILES *********************
include("../config/conn.php");
include("../config/functions.php"); 
// ********************** INCLUDE FILES *********************

//$varUserID = $_SESSION['User_ID'];
//$varUsername = $_POST['Username'];
//$varNewUsername = $_POST['NewUsername'];
//$varFname = $_POST['NewFname'];
//$varSname = $_POST['NewSname'];
//$varEmail = $_POST['NewEmail'];
//$varRank = $_POST['NewRank'];
//$varPassword = $_POST['NewPassword'];



// ********************** SELECT QUERY *********************


    $Username = $_POST['Username'];
    $NewUsername = $_POST['NewUsername'];
    $NewFname = $_POST['NewFname'];
    $NewSname = $_POST['NewSname'];   
    $NewEmail = $_POST['NewEmail'];
    $NewRank = $_POST['NewRank'];   
    $NewPassword = md5($_POST['NewPassword']);

    
    if (!empty($Username)) // This line here is checking that the fields aren't empty and ensuring the username doesn't contian numbers. '!' mens not. so the method '!empty($user_Name)' is saying field 'User_Name' is not empty.
    {
        
        if (!empty($NewUsername)){
            $query = "UPDATE `user-tbl` SET `Username` = '$NewUsername' WHERE `user-tbl`.`Username` = '$Username'"; //This will update the DB at the location provided.
        $result= mysqli_query($con, $query);  
        header("location: ../index2.php"); 
        // // echo "complete!";
        }
        elseif (!empty($NewFname)){
            $query = "UPDATE `user-tbl` SET `Fname` = '$NewFname' WHERE `user-tbl`.`Username` = '$Username'"; //This will update the DB at the location provided.
        $result= mysqli_query($con, $query);  
        header("location: ../index2.php"); 
        // // echo "complete!";
        }
        elseif (!empty($NewSname)){
            $query = "UPDATE `user-tbl` SET `Sname` = '$NewSname' WHERE `user-tbl`.`Username` = '$Username'"; //This will update the DB at the location provided.
        $result= mysqli_query($con, $query); 
        header("location: ../index2.php");  
        // echo "complete!";
        }
        elseif (!empty($NewEmail)){
            $query = "UPDATE `user-tbl` SET `Email` = '$NewEmail' WHERE `user-tbl`.`Username` = '$Username'"; //This will update the DB at the location provided.
        $result= mysqli_query($con, $query);
        header("location: ../index2.php");   
        // echo "complete!";
        }
        elseif (!empty($NewRank)){
            $query = "UPDATE `user-tbl` SET `Rank` = '$NewRank' WHERE `user-tbl`.`Username` = '$Username'"; //This will update the DB at the location provided.
        $result= mysqli_query($con, $query);   
        header("location: ../index2.php");
        // echo "complete!";
        }
        elseif (!empty($NewPassword)){
            $query = "UPDATE `user-tbl` SET `Password` = '$NewPassword' WHERE `user-tbl`.`Username` = '$Username'"; //This will update the DB at the location provided.
        $result= mysqli_query($con, $query);   
        header("location: ../index2.php");
        // echo "complete!";
        }              
 else{
    echo "failed!";
     }
}else{
    echo "Please provide a valid username";
}



    
         
          

//May encounter an issue here, as the admin might end up being logged in as the user they have updated. Will have to test this and see as the variables might change.
//header("location: ../index2");
