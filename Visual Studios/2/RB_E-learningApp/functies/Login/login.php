<?php
    $server = "localhost";
    $user = "root"; 
    $pwd = "";
    $database = "owl-learn";

    $username = $_REQUEST["user"];
    $password = $_REQUEST["pwd"];
    
    $conn = new mysqli($server, $user, $pwd, $database);
    $sql = "select * from `users` where Username='$username'";
    $result = mysqli_query($conn, $sql);
    if ($rij = mysqli_fetch_array($result)) {
        if ($rij['Password']==$password) {
            echo $rij["UserID"];         
        }
        else{
            echo "false";
        }
    }
    else{
        echo "false";
    }
?>