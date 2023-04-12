<?php

session_start();

// ********************* INCLUDE FILES ********************* 
include("config/conn.php");
include("config/functions.php");
// ********************* INCLUDE FILES *********************

if(($User_Data = check_login($con)) == true)
{
navbar_check($con);
$_SESSION['Username'] = $User_Data['Username'];
$_SESSION['Tier'] = $User_Data['Tier'];
}
else
{
  include("Navbars/general_navbar.php");
}

bg_check2($con);

?>
<title>Highscores</title>

<!-- ********************* BOOTSTRAP ********************* -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha382-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha382-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<!-- ********************* BOOTSTRAP ********************* -->


<!-- ********************* MY CSS ********************* -->
<link rel="stylesheet" href="css/styles.css">

<style>
    body {	
    background-image: url("Images/high_back.png"); 	
}

    div.high_main {	
		width: 1345px;
		height: auto;
		margin: 5em auto;
		padding: 50px;
		background-color: #E8E1C7;
		border-radius: 1em;		
}	

 
</style>
<!-- ********************* MY CSS ********************* -->

<head>

</head>


<body>
    <div class="high_main">		
        <div class="wrapper">     
            <h1 style="text-align: center; color: black; font-weight: bold; text-decoration: underline;">Snake Highscores</h1>
            <table class="table table-striped table-dark table-sm">
                <!--------------------  HTML Table Column Headings  -------------------->
                <thead>
                    <tr>
                        <th style="color: black; font-weight: bold;" scope="col">Username</th>
                        <th style="color: black; font-weight: bold;" scope="col">Score</th>
                    </tr>
                </thead>
                <!--------------------  HTML Table Body  -------------------->                
                <tbody>
                        <?php
                            // SQL SELECT statement to select fld_member_id, fld_first_name, and fld_last_name from the members table, fld_image_points and 'SUM(fld_image_points)' from the images table, 
                            // in descending order by  SUM(fld_image_points), grouping the results by member ID.

                            $sql = "SELECT `score`, `user_name` FROM `snake_highscore_tbl` WHERE `game_id` LIKE '1' ORDER BY `score` ASC LIMIT 10";
        	                // This passes the variables $conn and $sql to the the function 'mysqli_query' and assigns the result of the query to the variable '$result'.
                            $result = mysqli_query($con, $sql);
                            // This 'IF' statement declares that if the value of the variable '$result' and the number of rows is greater than zero execute the code within the statement. 
                            if ($result && mysqli_num_rows($result) > 0) 
                            {
                                // This 'While' loop fetches the associative array for the value of the variable '$result' and assigns its value to the variable '$rows'.
                                while ($row = mysqli_fetch_assoc($result)) 
                                {     
                                    // This echoes the HTML table containing the varaibles '$row["fld_member_id"]', '$row["fld_first_name"]', '$row["fld_last_name"]' and '$row["SUM(fld_image_points)"]'on each row.
                                    echo "<tr>
                                            <td>" . $row["user_name"] . "</td>
                                            <td>" . $row["score"] . "</td>                                                                                                           
                                        </tr>";
                                }
                            }
                        ?>                    
                </tbody>
            </table>        
        <br>    
        <br>         


            <h1 style="text-align: center; color: black; font-weight: bold; text-decoration: underline;">Noughts & Crosses Highscores</h1>
            <table class="table table-striped table-dark table-sm">
                <thead>
                    <tr>
                        <th style="color: black; font-weight: bold;" scope="col">Username</th>
                        <th style="color: black; font-weight: bold;" scope="col">Time</th>
                    </tr>
                </thead>
                <tbody>
                        <?php
                            // SQL SELECT statement to select fld_member_id, fld_first_name, and fld_last_name from the members table, fld_image_points and 'SUM(fld_image_points)' from the images table, 
                            // in descending order by  SUM(fld_image_points), grouping the results by member ID.

                            $sql = "SELECT `score`, `user_name` FROM `highscore_tbl` WHERE `game_id` LIKE '2' ORDER BY `score` DESC LIMIT 10";
        	                // This passes the variables $conn and $sql to the the function 'mysqli_query' and assigns the result of the query to the variable '$result'.
                            $result = mysqli_query($con, $sql);
                            // This 'IF' statement declares that if the value of the variable '$result' and the number of rows is greater than zero execute the code within the statement. 
                            if ($result && mysqli_num_rows($result) > 0) 
                            {
                                // This 'While' loop fetches the associative array for the value of the variable '$result' and assigns its value to the variable '$rows'.
                                while ($row = mysqli_fetch_assoc($result)) 
                                {     
                                    // This echoes the HTML table containing the varaibles '$row["fld_member_id"]', '$row["fld_first_name"]', '$row["fld_last_name"]' and '$row["SUM(fld_image_points)"]'on each row.
                                    echo "<tr>
                                            <td>" . $row["user_name"] . "</td>
                                            <td>" . $row["score"] . "</td>                                                                                                           
                                        </tr>";
                                }
                            }
                        ?>                    
                </tbody>
            </table>
            <br>    
            <br> 
            <h1 style="text-align: center; color: black; font-weight: bold; text-decoration: underline;">The Maze Highscores</h1>
            <table class="table table-striped table-dark table-sm">
                <thead>
                    <tr>
                        <th style="color: black; font-weight: bold;" scope="col">Username</th>
                        <th style="color: black; font-weight: bold;" scope="col">Score</th>
                    </tr>
                </thead>
                <tbody>
                        <?php
                            // SQL SELECT statement to select fld_member_id, fld_first_name, and fld_last_name from the members table, fld_image_points and 'SUM(fld_image_points)' from the images table, 
                            // in descending order by  SUM(fld_image_points), grouping the results by member ID.

                            $sql = "SELECT `score`, `user_name` FROM `highscore_tbl` WHERE `game_id` LIKE '2' ORDER BY `score` DESC LIMIT 10";
        	                // This passes the variables $conn and $sql to the the function 'mysqli_query' and assigns the result of the query to the variable '$result'.
                            $result = mysqli_query($con, $sql);
                            // This 'IF' statement declares that if the value of the variable '$result' and the number of rows is greater than zero execute the code within the statement. 
                            if ($result && mysqli_num_rows($result) > 0) 
                            {
                                // This 'While' loop fetches the associative array for the value of the variable '$result' and assigns its value to the variable '$rows'.
                                while ($row = mysqli_fetch_assoc($result)) 
                                {     
                                    // This echoes the HTML table containing the varaibles '$row["fld_member_id"]', '$row["fld_first_name"]', '$row["fld_last_name"]' and '$row["SUM(fld_image_points)"]'on each row.
                                    echo "<tr>
                                            <td>" . $row["user_name"] . "</td>
                                            <td>" . $row["score"] . "</td>                                                                                                           
                                        </tr>";
                                }
                            }
                        ?>                    
                </tbody>
            </table>
            <br>    
            <br>
        </div>
    </div>        
</body>

<!-- ************************* JQuery CDN *************************** -->
 <script src="js/jquery-3.6.0.js"></script>
 <script src="js/Main.js"></script>
 


