<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>글쓰기</h1>
    <a href="list.php"><button>리스트</button></a>
    <form action="write_proc.php" method="post">
        <!--form은 목적지 설정 post은 전달 방식
            post방식은 form태그가 필요하다
        -->
        <div><input type="text" name="title" placeholder="제목"></div>
        <div><textarea name="ctnt" placeholder="내용"></textarea></div>
        <!--
            name값을 맞춰서 받는 방식을 약속한다
            키값이 name이 되고 안에 넣는 값이 value값이 된다
            이 두가지 값을 가지고 같은 name값을 통해 부르는 곳으로 간다
        -->
        <div>
            <input type="submit" value="글등록">
            <input type="reset" value="초기화">
        </div>
    </form>
</body>
</html>