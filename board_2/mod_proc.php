<?php
    include_once "db.php";

    $num = $_POST['num'];
    $title = $_POST['title'];
    $ctnt = $_POST['ctnt'];

    $sql = 
    " UPDATE db_t 
      SET title = '$title', ctnt = '$ctnt'
      WHERE num = $num";

    $conn = get_conn();
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    header("Location: detail.php?num=${num}")

?>
