<?php
    session_start();// 세션이 필요한 곳은 있어야 한다
    $_SESSION['var1'] = "v1";
    $_SESSION['var2'] = "v3";

    //unset($_SESSION['var2']); 세션 만나자 마자 세션을 없앤다

    echo $_SESSION['var1'], "<br>";
    echo $_SESSION['var2'], "<br>";
?>
<a href="session_destroy.php">destroy</a>
