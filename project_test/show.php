<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="header.css">
    <title>우리동네미술관</title>
</head>
<body>
    <div>
        <div>로그인 | 회원가입</div>
        <header>
            <?php include_once "header.php" ?>
        </header>
        <main>
            <div>
            <a href="gallery.php"><button>BACK</button></a>
            <a href="current_show.php"><button>지난전시</button></a>
            <a href="past_show.php"><button>현재전시</button></a>
            </div>
            <table>
                <thead>
                <tr>
                    <th>전시 1</th>
                    <th>전시 2</th>
                    <th>전시 3</th>
                </tr>
                </thead>
                <tbody>
                <tr class="mid">
                    <td class="post1">전시포스터1</td>
                    <td class="post2">전시포스터2</td>
                    <td class="post3">전시포스터3</td>
                </tr>
                </tbody>
            </table>
        </main>
    </div>
</body>
</html>