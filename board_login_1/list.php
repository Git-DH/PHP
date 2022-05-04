<?php
 include_once "db/db_board.php";
 session_start();
 $nm = "";

 $page = 1;
 if(isset($_GET["page"])) { 
    $page = intval($page);// 문자열을 정수형으로 바꿔주는 함수
}
 if(isset($_SESSION["login_user"])) {
     $login_user = $_SESSION["login_user"];
     $nm = $login_user["nm"];
 }
 $row_count = 20;
 $param = [
    "row_count" => $row_count,
    "start_idx" => ($page -1) * $row_count
];
 $paging_count = sel_paging_count($param);
 $list = sel_board_list($param);

 if(isset($_POST['search_input_txt']) && $_POST['search_input_txt'] != ""){
     $param += [
        "search_select" => $_POST["search_select"],
        "search_input_txt" => $_POST["search_input_txt"]
     ];
     // DB조회 전달 후 결과 list를 받아온다
     $list = search_board($param);
 }
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
         <div>
         <?=isset($_SESSION["login_user"]) ? $nm . " 님 환영합니다.<br> " : "" ?>
            <a href="list.php"><button>리스트</button></a>
            <?php if(isset($_SESSION["login_user"])) { ?>
                <a href="write.php"><button>글쓰기</button></a>
                <a href="logout.php"><button>로그아웃</button></a>
            <?php } else{ ?>
                <a href="login.php"><button>로그인</button></a>
            <?php } ?>
         </div>
         </header>
         <main>
             <h1>자유 게시판</h1>
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
                    <td><?=$item["create_at"]?></td>
                 </tr>
                <?php } ?>
             </table>
             <div>
            <?php for($i=1; $i<=$paging_count; $i++) { ?>
                <span class="num"><a href="list.php?page=<?=$i?>"><?=$i?></a></span>
            <?php } ?>
        </div>
        <form action="list.php" method="POST">
        <div>
            <select name="search_select">
                <option value="search_writer">작성자</option>
                <option value="search_title">제목</option>
                <option value="search_ctnt">제목+내용</option>
            </select>
            <div>
                <input type="text" name="search_input_txt">
                <input type="submit" value="검색">
            </div>
        </div>
        </form>
         </main>
         </div>
 </body>
 </html>