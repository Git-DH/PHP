<?php
    include_once "db.php";
    
    $title = $_POST['title'];
    $ctnt = $_POST['ctnt'];
    $n_name = $_POST['n_name'];
    $sql = "INSERT INTO board
            (title, ctnt, n_name)
            VALUES
            ('$title', '$ctnt', '$n_name')";
    $conn = get_conn();
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    header("Location: list.php");
    //조회수 추가 해보기
?>