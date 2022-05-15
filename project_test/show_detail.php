<?php
    include_once "db/db_board.php";
    
    $s_id = $_GET["s_id"];
    $param = [
        "s_id" => $s_id
    ];
    $result = sel_show($param);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/show_detail.css">
    <title>show_detail</title>
</head>
<body>
    <?php include_once "header_1.php"; ?>
    <div id="container">
        <div class="gal_nm">미술관이름</div> <!-- 미술관 번호로 이름 가져오기 -->
        <table>
            <!-- html작성 후 db 값 가져오기 -->
            <tr>
                <th rowspan="2" colspan="6"><?=$result["s_nm"]?></th>
            </tr>
            <tr>
            </tr>
            <tr>
                <td>전시시작일</td>
                <td colspan="2"><?=$result["s_s_date"]?></td>
                <td>전시종료일</td>
                <td colspan="3"><?=$result["s_e_date"]?></td>
            </tr>
            <tr>
                <td>전시개요</td>
                <td colspan="4">전시개요</td>
            </tr>
        </table>
        <div>전시사진1</div>
        <div>전시사진2</div>
        <div>전시사진3</div><!-- 이미지 링크 받아오기 -->
    </div>
    <?php include_once "footer.php"; ?>
</body>
</html>