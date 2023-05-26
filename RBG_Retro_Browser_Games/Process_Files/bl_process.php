<?php
 session_start();
       // Read from database
include("../config/conn.php");
include("../config/functions.php"); 

   
    //$_SESSION['Username'] = $User_Data['Username'];
    
    $Username = $_SESSION['Username'];

     $query = "SELECT * FROM `blacklist_tbl` WHERE `Username` LIKE '".$Username."'";
      $result = mysqli_query($con, $query);
    
      
      if($result && mysqli_num_rows ($result) > 0)
      {
        $User_Data = mysqli_fetch_assoc($result);
        
                
                $_SESSION['Username'] = $User_Data['Username'];
                $_SESSION['Email'] = $User_Data['Email'];
                $_SESSION['BL_Reason'] = $User_Data['BL_Reason'];

    
     header("location: ../Account/blacklisted.php"); 
     //echo $_SESSION['Username'];
     //echo $_SESSION['Email'];
     //echo $_SESSION['BL_Reason'];  
    }


?>