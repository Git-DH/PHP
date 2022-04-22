<?php
    session_start();//보안상 사용하는게 좋다
    $_SESSION['g'] = "This is a Global variable";
    // 세션은 한 컴퓨터의 브라우저 마다 할당이 된다-브라우저 개인용
    // 브라우저는 킬때마다 새로운 id값이 들어가고 세션은 그 id에 입력된다
    // id값은 브라우저가 새로 실행 될 때마다 새로적용 된다
?>
<a href="page4.php">Next Page</a>