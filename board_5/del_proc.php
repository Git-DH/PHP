<?php
    include_once "db.php";

    $num = $_GET['num'];
    $sql = "DELETE FROM board WHERE num = $num";
    $conn = get_conn();
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    header("Location: list.php");
?>