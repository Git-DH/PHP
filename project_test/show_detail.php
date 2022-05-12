<?php
    include_once "db/db_show.php";

    $g_num = $_GET["gal_id"];//get값을 어디서 받는지 확인
    $param = [
        "gal_id" => $gal_id
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
    <div><?=$reslut["gal_id"]?></div>
    <?php include_once "header.php" ?>
</body>
</html>