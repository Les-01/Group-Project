<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT); //This line will run if the conn.php can't connect to the database, this line will spit 
$dbhost = 'db5012368491.hosting-data.io'; // This line is creating a variable 'dbhost'. 'db' means database, host is where the server or database is being hosted. In this case it is local.
$dbuser = 'dbu3772318'; // Variable 'dbuser' database user and that's me so it has my name as i created an account on the server with all permissions
$dbpass = 'Phoenix101?!'; // Variable 'dbpass' which means database password, this is the email used for the user (me).
$dbname = 'dbs10401952'; // variaable created 'dbname' this is the name of the database. This is important as a server can have multiple databases on it and therefore you need to make sure the code knows exactly where it is going. In theory i'd imaging that this method can allow a website to use multiple databases and cross between them.

if(!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)) // This statement is saying that if it is NOT able to connect to the database run the below code which kills the code.
    { //This opens the if statement code
    die("Failed to connect!"); // This line will kill the code and print out the message in the brackets on the screen for the user to see.
    } //This closes the if statement




?> <!-- This closes the php for the final time on the page. -->