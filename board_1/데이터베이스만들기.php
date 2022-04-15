<!--
<DB> - HeidiSQL에 불러올 데이터 베이스와 테이블을 만들어야 한다

define("URL", "url명");
define("USERNAME", "ID");
define("PASSWORD", "PASSWORD");
define("DB_NAME", "DB_NAME");
define("PORT", "****"); 포트의 경우 기본값과 다르지 않으면 입력하지 않아도 된다

function get_conn()/다른 php파일들이 쓸 수 있도록 함
{
	return mysqli_connect(URL, USERNAME, PASSWORD, DB_NAME, PORT)
}

<write>-브라우저의 "글작성" html형태 입력(보내는 값과 형식을 입력함, input, post(get))
-html body에 작성
<h1>글쓰기</h1>
<a href="list.php"><button>리스트</button></a>
<form action="write_proc.php" method="post">
form action: "내보내고자 하는 링크" / method="post": 내보내는 형식
method="post"를 사용하기 위해서는 form태그가 필요하다
    <div><input type="text" name="title" placeholder="제목"></div>
    <div><textarea name="ctnt" placeholder="내용"></textarea></div>
    <div>
        <input type="submit" value="글등록">
        <input type="reset" value="초기화">
    </div>
</form>

<write_proc>-insert문

include_once "db.php" / db파일을 가져온다

$title = $_POST["title"] / post형식으로 내보낸다
$ctnt = $_POST["ctnt"]

print "title : $title <br>"; / 확인용 print
print "title : $ctnt <br>";

$conn = get_conn(); /include_once를 통해서 가져 왔다
$sql = 
"
    INSERT INTO t_board db에 값을 준다
    (title, ctnt)
    VALUES
    ('${title}', '${ctnt}') /문자열로 되어 있으면 ''사용
";

$result = mysqli_query($conn, $sql);/ mysqli_query(연결지정, 쿼리문자열 지정)
mysqli_close($conn); // 연결닫기
print "result : $result <br>";
header("Location: list.php")/ 리다이렉트: 실행시 연결된 링크로 이동
/ header함수가 활성화 되어 있으면 write_proc의 print문이 실행되지 않음
/ print문을 확인하고 싶을시 비활성화 시켜야함

<list>-select문

include_once "db.php";

$conn = get_conn();
$sql = "SELECT i_board, title, create_at FROM t_board ORDER BY i_board DESC";
        //(셀렉트 문은 데이터 베이스 자료가 넘어온다)
$result = mysqli_query($conn, $sql);// 쿼리문 실행
        // mysqli_query(연결지정, 쿼리문자열 지정)
mysqli_close($conn);//닫는거 잊으면 안됨
// 원하는 결과물을 다 가져왔기 때문에 위에서 닫아도 된다

*html(body)

<h1>리스트</h1> - 브라우저의 "리스트 페이지 작성"
    <a href="write.php"><button>글쓰기</button></a>
    <table>
        <tr>
            <th>번호</th>
            <th>제목</th>
            <th>작성일지</th>
        </tr>
        <php
            while($row = mysqli_fetch_assoc($result))
            {// 리절트 셋(result set)에서 레코드를 1개씩 리턴해주는 함수
             // mysqli_fetch_assoc를 반복 시키기 위해 while문을 사용
             // 실행 할때마나 데이터 베이스의 첫번째 줄부터 순서대로 실행
             // $row에 배열로 들어가고 컬럼명(i_board등)을 키값으로 잡는다   
                $i_board = $row['i_board'];
                $title = $row['title'];
                $create_at = $row['create_at'];
                print "<tr>";
                print "<td>${i_board}</td>";
                print "<td><a href='detail.php?i_board=${i_board}'>${title}</a></td>";
                print "<td>${create_at}</td>";
                print "</tr>";
            }
        >
    </table>

-------------

<detail>-select문 추가설정
/list파일에서 내용을 확인하고 수정, 삭제가 가능하도록 만든 페이지

include_once 'db.php';

$i_board = $_GET['i_board'];
    $sql= " SELECT * FROM t_board WHERE i_board = $i_board";

    $conn = get_conn();
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    if($row = mysqli_fetch_assoc($result))
    / 리스트와 달리 게시글 하나의 내용을 확인하기 때문에 
      한 줄만 나오도록 if문으로 정리함
    {
        $title = $row['title'];
        $ctnt = $row['ctnt'];
        $create_at = $row['create_at'];
    }
    연결 해야 할 페이지의 링크버튼과 게시판 내용 확인에 필요한 형식을 작성
    <a href="list.php"><button>리스트</button></a>
    <a href="del_proc.php?i_board=<?=$i_board?>"><button>삭제</button></a>
    / delete문의 경우 어떤걸 삭제 하고 싶은지 추가 해줘야 한다
    <a href="mod.php?i_board=<?=$i_board?>"><button>수정</button></a>
    <div>제목 : <?= $title ?></div>
    <div>작성일시 : <?= $create_at ?></div>
    <div>내용 : <?= $ctnt ?></div>
    / php 축약형
-->