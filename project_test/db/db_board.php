<?php
include_once "db.php";

function sel_board_list() {
    $sql=
    "   SELECT B.b_id, B.b_ctnt, B.b_date
             , U.u_nick
          FROM board_t B
         INNER JOIN user_t U
            ON B.u_id = U.u_id
         ORDER BY B.b_id DESC
    ";
    $conn= get_conn();
    $result= mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $result;
}

function ins_img(&$param) {
   $s_id= $param["s_id"];
   $target_filenm= $param["pic_img"];
   $pic_img= $param["pic_img"] == '' ? "NULL" : "'$target_filenm'";

   $sql= 
   "  INSERT INTO picture_t
      (s_id, pic_img)
      VALUES
      ('$s_id', $pic_img)
   ";
   
   $conn= get_conn();
   $result= mysqli_query($conn, $sql);
   mysqli_close($conn);
   return $result;
}

function sel_show(&$param) {
   $s_id = $param['s_id'];

   $sql =
   "SELECT S.s_id, S.gal_id, S.s_nm, S.s_s_date, S.s_e_date, S.s_post
    FROM show_t S
    INNER JOIN picture_t P
    ON S.s_id = P.s_id
    WHERE S.s_id = $s_id
   ";
   $conn = get_conn();
   $result = mysqli_query($conn, $sql);
   mysqli_close($conn);
   return mysqli_fetch_assoc($result);
}