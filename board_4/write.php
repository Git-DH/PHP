<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>게시판</h1>
    <a href="list.php"><button>리스트</button></a>
    <form action="write_proc.php" method="post">
        <div><input type="text" name="title" placeholder="제목"></div>
        <div><textarea name="ctnt" placeholder="내용"></textarea></div>

        <input type="submit" value="글작성">
        <input type="reset" value="초기화">
    </form>
</body>
</html>