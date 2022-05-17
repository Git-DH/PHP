<?php
    include_once "db/db_board.php";
    session_start();
    $nm = "";
    $page = $_GET["page"];
    if(!$page) {
        $page = 1;
    } else {
        $page = intval($page);//intval은 문자열인 get값을 정수로 형변환 시킨다
    }

    if(isset($_SESSION["login_user"])){
        $login_user = $_SESSION["login_user"];
        $nm = $login_user["nm"];
    }

    $row_count = 20;
    $param = [
        "row_count" => $row_count
        
    ];

    $paging_count = sel_paging_count($param);
    $list = sel_board_list();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="common.css">
    <title>리스트</title>
</head>
<body>
    <div id="container">
        <header>
            <?=isset($_SESSION["login_user"]) ? $nm . "님 환영합니다." : "" ?>
            <div>
                <a href="list.php">리스트</a>
                <?php if(isset($_SESSION["login_user"])){ ?>
                    <a href="write.php">글쓰기</a>
                    <a href="logout.php">로그아웃</a>
                <?php } else { ?>
                    <a href="login.php">로그인</a>
                <?php } ?>
            </div>
        </header>
        <main>
            <h1>리스트</h1>
            <table>
                <tr>
                    <th>번호</th>
                    <th>제목</th>
                    <th>작성자</th>
                    <th>등록일시</th>
                </tr>
                <?php foreach($list as $item)
                { ?>
                <tr>
                    <td><?=$item["i_board"]?></td>
                    <td><a href="detail.php?i_board=<?=$item["i_board"]?>"><?=$item["title"]?></a></td>
                    <td><?=$item["nm"]?></td>
                    <td><?=$item["crate_at"]?></td>
                </tr>
                <?php } ?>
            </table>
            <div>
                <?php for($i=1; $i<=$paging_count; $i++) { ?>
                    <span><a href="list.php?page=<?=$i?>"><?=$i?></a></span>
                <?php } ?>
            </div>
        </main>
    </div>
</body>
</html>