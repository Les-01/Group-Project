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
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th style="color: black; font-weight: bold;" scope="col">Place</th>
                        <th style="color: black; font-weight: bold;" scope="col">Username</th>
                        <th style="color: black; font-weight: bold;" scope="col">Score</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th style="color: black; font-weight: bold;" scope="row">1st</th>
                        <td style="color: black;">Mark</td>
                        <td style="color: black;">Otto</td>
                    </tr>
                    <tr>
                        <th style="color: black; font-weight: bold;" scope="row">2nd</th>
                        <td style="color: black;">Jacob</td>
                        <td style="color: black;">Thornton</td>
                    </tr>
                    <tr>
                        <th style="color: black; font-weight: bold;" scope="row">3rd</th>
                        <td style="color: black;">Larry</td>
                        <td style="color: black;">the Bird</td>
                    </tr>
                    <tr>
                        <th style="color: black; font-weight: bold;" scope="row">4th</th>
                        <td style="color: black;">Larry</td>
                        <td style="color: black;">the Bird</td>
                    </tr>
                    <tr>
                        <th style="color: black; font-weight: bold;" scope="row">5th</th>
                        <td style="color: black;">Larry</td>
                        <td style="color: black;">the Bird</td>
                    </tr>
                </tbody>
            </table>        
        <br>    
        <br>         
            <h1 style="text-align: center; color: black; font-weight: bold; text-decoration: underline;">Noughts & Crosses Highscores</h1>
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th style="color: black; font-weight: bold;" scope="col">Place</th>
                        <th style="color: black; font-weight: bold;" scope="col">Username</th>
                        <th style="color: black; font-weight: bold;" scope="col">Score</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th style="color: black; font-weight: bold;" scope="row">1st</th>
                        <td style="color: black;">Mark</td>
                        <td style="color: black;">Otto</td>
                    </tr>
                    <tr>
                        <th style="color: black; font-weight: bold;" scope="row">2nd</th>
                        <td style="color: black;">Jacob</td>
                        <td style="color: black;">Thornton</td>
                    </tr>
                    <tr>
                        <th style="color: black; font-weight: bold;" scope="row">3rd</th>
                        <td style="color: black;">Larry</td>
                        <td style="color: black;">the Bird</td>
                    </tr>
                    <tr>
                        <th style="color: black; font-weight: bold;" scope="row">4th</th>
                        <td style="color: black;">Larry</td>
                        <td style="color: black;">the Bird</td>
                    </tr>
                    <tr>
                        <th style="color: black; font-weight: bold;" scope="row">5th</th>
                        <td style="color: black;">Larry</td>
                        <td style="color: black;">the Bird</td>
                    </tr>
                </tbody>
            </table>
            <br>    
            <br> 
            <h1 style="text-align: center; color: black; font-weight: bold; text-decoration: underline;">The Maze Highscores</h1>
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th style="color: black; font-weight: bold;" scope="col">Place</th>
                        <th style="color: black; font-weight: bold;" scope="col">Username</th>
                        <th style="color: black; font-weight: bold;" scope="col">Score</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th style="color: black; font-weight: bold;" scope="row">1st</th>
                        <td style="color: black;">Mark</td>
                        <td style="color: black;">Otto</td>
                    </tr>
                    <tr>
                        <th style="color: black; font-weight: bold;" scope="row">2nd</th>
                        <td style="color: black;">Jacob</td>
                        <td style="color: black;">Thornton</td>
                    </tr>
                    <tr>
                        <th style="color: black; font-weight: bold;" scope="row">3rd</th>
                        <td style="color: black;">Larry</td>
                        <td style="color: black;">the Bird</td>
                    </tr>
                    <tr>
                        <th style="color: black; font-weight: bold;" scope="row">4th</th>
                        <td style="color: black;">Larry</td>
                        <td style="color: black;">the Bird</td>
                    </tr>
                    <tr>
                        <th style="color: black; font-weight: bold;" scope="row">5th</th>
                        <td style="color: black;">Larry</td>
                        <td style="color: black;">the Bird</td>
                    </tr>
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
 


