<?php

    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "record-list";
    $conn = new mysqli($db_server, $db_user, $db_pass, $db_name);
    if(!$conn){
        echo mysqli_error;
    }
    
                            
?>