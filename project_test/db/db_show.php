<?php
    include_once "db.php";

    function sel_show(&$param){
        $gal_id = $param["gal_id"];

        $sql = 
            "SELECT A.gal_id, A.s_id, A.s_nm, A.
             FROM show_t A
             INNER JOIN galley_t B
             ON A.gal_id = B.gal_id
             WHERE A.gal_id = $gal_id
            ";
        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return mysqli_fetch_assoc($result);
    }
    // 전시 이미지는 업로드한 폴더에서 불러온다
?>