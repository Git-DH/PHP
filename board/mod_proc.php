<?php
    include_once "db.php";

    $i_board = $_POST['i_board'];
    $title = $_POST['title'];
    $ctnt = $_POST['ctnt'];
    
    $sql = "
    UPDATE t_board 
    SET title = '$title',
    ctnt = '$ctnt',
    mod_at = now()
    WHERE i_board = $i_board";

    $conn = get_conn();
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    header( "Location: detail.php?i_board=${i_board}" );
    //쿼리스트링: 주소값?key값=value
    //바뀌는 값이 들어 가야하는 곳에 적어줘야한다
    //get방식은 퀴리스트링밖에 못 준다
?>