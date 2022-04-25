<?php
include_once "db.php";

<<<<<<< HEAD
function ins_user($param) {
    $uid = $param["uid"];
    $upw = $param["upw"];
    $nm = $param["nm"];
    $gender = $param["gender"];
   
    $conn = get_conn(); //db의 커넥트문을 불러와서 값을 복사해 줌
    $sql = 
    "   INSERT INTO t_user 
        (uid, upw, nm, gender)
        VALUES 
        ('$uid', '$upw', '$nm', '$gender')
     ";
    $result = mysqli_query($conn, $sql);//쿼리를 실행 시키는 함수
    //insert문은 결과 값에 1 , 0 만이 복사된다
    //select문은 selelct문의 결과 값이 복사된다
=======
function user_join($param)
{
    $uid = $param['uid'];
    $upw = $param['upw'];
    $nm = $param['nm'];
    $gender = $param['gender'];

    $conn = get_conn();
    $sql = 
    "INSERT INTO t_user
     (uid, upw, nm, gender)
     VALUES
     ('$uid', '$upw', '$nm', '$gender')
    ";
    $result = mysqli_query($conn, $sql);
>>>>>>> 759783b0ddb3959fee0485d842c06fc105142f08
    mysqli_close($conn);
    return $result;
}

function sel_user($param)
{
    $uid = $param["uid"]; //id부터 값을 확인한다
    $sql = 
    "   SELECT i_user, uid, upw, nm, gender
        FROM t_user
        WHERE uid= '$uid'
    ";
    $conn = get_conn();
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    return mysqli_fetch_assoc($result);//result안의 값을 배열화 시켜준다
}

/*function sel_upw($param)
{
    $upw = $param["upw"]; //id부터 값을 확인한다
    $sql = 
    "   SELECT i_user, uid, upw, nm, gender
        FROM t_user
        WHERE upw= '$upw'
    ";
    $conn = get_conn();
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    return mysqli_fetch_assoc($result);//result안의 값을 배열화 시켜준다
}*/