<?php
$servername ="localhost";
        $username = "per";
        $password = "yakumo121978i";
        $dbname = "per";
        $tblname = $current_username;
        $mysqli = new mysqli($servername, $username, $password, $dbname);
        if ($mysqli -> connect_error) {
                die("Connection failed: ". $mysqli->connect_error);
        }
        else{
#                echo "connection successfull";
        }
?>
