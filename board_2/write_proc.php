<?php
    include_once "db.php";

    $title = $_POST["title"];
    $ctnt = $_POST["ctnt"];

    print "title : $title<br>";
    print "ctnt : $ctnt<br>";


    $conn = get_conn();
    $sql = "INSERT INTO db_t (title, ctnt) 
    VALUES ('${title}', '${ctnt}')";
    
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    header("Location: list.php");  
?>