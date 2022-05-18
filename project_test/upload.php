<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
</head>
<body>
    <?php include_once ("header_1.php") ?>
    <div id="container">
    <div><h3>Upload</h3></div>
    <form action="upload_proc.php" method="post" enctype="multipart/form-data">
        <div><label>img : <input type="file" name="pic_img" accept="img/*"></label></div>
        <div><label>s_id : <input type="text" name="s_id"></label></div>
        <div><input type="submit" value="upload"></div>
    </form>
    <div>
        <br><a href="index.php">←메인</a>        
    </div>
    </div>
    <?php include_once ("footer.php") ?>
</body>
</html>