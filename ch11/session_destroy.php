<?php
    session_start();
    session_destroy(); //실행 된 세션은 유지후에 새로고침시 사라짐
    echo $_SESSION['var1'], "<br>";
    echo $_SESSION['var2'], "<br>";
?>
<a href="confirm.php">확인</a>