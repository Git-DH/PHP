<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="upload_proc.php" method="POST" enctype="multipart/form-data">
    <!--파일 업로드 시에는 method는 무조건 post방식이다 / enctype : 파일 업로드시 필수로 넣어줘야 한다-->
        <div><label>이미지<input type="file" name="img" accept="image/*"></label></div>
        <!--accept="image/*"는 파일 선택시 이미지 확장자 파일만 보이도록 하는 것-->
        <div><input type="submit" value="업로드"></div>
    </form>
</body>
</html>