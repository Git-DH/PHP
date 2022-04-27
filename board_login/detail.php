<?php
    include_once "db/db_board.php";
    session_start();
    if(isset($_SESSION["login_user"])){
        $login_user = $_SESSION["login_user"];
    }
    $i_board = $_GET["i_board"];
    $param = [
        "i_board" => $i_board
    ];
    $item = sel_board($param);
    //print_r($param);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$item["title"]?></title>
</head>
<body>
    <div><a href="list.php">리스트</a></div>
    <?php if(isset($_SESSION["login_user"]) && $login_user["i_user"] === $item["i_user"]){?>
    <div> <!-- &&를 적으면 앞의 값만 true가 떠도 if문이 적용 된다 로그인을 하게 되면 뒤에 문장도 true가 된다 -->
        <a href="mod.php?i_board=<?=$i_board?>"><button>수정</button></a>
        <button onclick="isDel();">삭제</button><!-- 함수 호출부분 , 이벤트 바인딩 -->
    </div>
    <?php } ?>
    <div>제목 : <?=$item["title"]?></div>
    <div>글쓴이 : <?=$item["nm"]?></div>
    <div>등록일시 : <?=$item["create_at"]?></div>
    <div><?=$item["ctnt"]?></div>
    <script>// 함수 정의 부분
        function isDel() {
            console.log('isDel 실행됨!!');
            if(confirm('삭제하시겠습니까?')){
                location.href = "del.php?i_board=<?=$i_board?>";
            }
        }
    </script>
</body>
</html>