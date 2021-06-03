<?php
    // mysqli
    $db_host = "database-1.c7z6i1frqsa9.ap-northeast-2.rds.amazonaws.com";
    $db_user = "admin";
    $db_pass = "87654321";
    $db_name = "webdb";
    $conn = mysqli_connect($db_host,$db_user,$db_pass,$db_name);
    /*
    if (!$conn) {
        echo "<script>alert(\"DB Connection False\");</script>";
    }
    else {
        echo "<script>alert(\"DB Connection Success\");</script>";
    }
    */
?> 

