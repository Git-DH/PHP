<?php
    include_once "db.php";

    $num = $_POST['num'];
    $title = $_POST['title'];
    $ctnt = $_POST['ctnt'];
    $n_name = $_POST['n_name'];
    $sql = "UPDATE board
            SET title = '$title',
                ctnt = '$ctnt',
                n_name = '$n_name'
            WHERE num = $num";
    $conn = get_conn();
    $result = mysqli_query($conn, $sql);
    header("Location: detail.php?num=$num");
?>