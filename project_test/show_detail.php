<?php
    include_once "db/db_show.php";

    $g_num = $_GET["g_num"];//get값을 어디서 받는지 확인
    $param = [
        "g_num" => $g_num
    ];
    $result = sel_show($param);
    print_r($param);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show</title>
</head>
<body>
    <div><?=$reslut["g_num"]?></div>
    <?php include_once "header.php" ?>
</body>
</html>