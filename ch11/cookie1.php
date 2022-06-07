<?php
    setcookie("country", "korea");
    if(isset($_COOKIE['country']))
    {
        echo "country : ", $_COOKIE['country'], "<br>";
    }
// 쿠키: 세션과 비슷하지만 저장공간이 클라이언트쪽이고 호출시 항상 값이 따라오고 
// 서버에서 확인이 가능하다. 그러므로 보안에 취약하다.
?>
<a href="cookie2.php">Next Page</a>