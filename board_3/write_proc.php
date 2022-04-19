<?php
    include_once "db.php";

    $title = $_POST["title"];
    $ctnt = $_POST["ctnt"];

    print "titlte : ${title}<br>";
    print "ctnt : ${ctnt}<br>";
    
    $sql = " INSERT INTO t_board (title, ctnt)
    VALUES ('${title}', '${ctnt}')";
    $conn = get_conn();
    $result = mysqli_query($conn, $sql); 
    mysqli_close($conn);
    header("Location: list.php");
?>