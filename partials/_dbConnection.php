<?php

$server = "localhost"; // write your server name or paste your server link
$username = "root"; //write your username of your server
$pass = ""; // write your password here
$db = "registrationform"; //write the name of your database

$con = mysqli_connect($server, $username, $pass, $db); //This will make a connection to the server

if ($con) { // if connection is sucessfull
?>
<script>console.log("Connection Successfull")</script>
<?php
}else { //if connection fails
        echo '<div class="alert alert-danger" role="alert">
         Connection Error
        </div>';
       }
?>