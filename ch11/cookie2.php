<?php
    setcookie("country", "한국");
    echo "country : ", $_COOKIE['country'], "<br>";

    $_COOKIE['country'] = "UK";
    //그냥 값만 넣을 시 브라우저 내의 쿠키는 korea로 나온다
    echo "country : ", $_COOKIE['country'], "<br>";

    /*
    unset($_COOKIE['country']);
    setcookie("country");
    // 쿠키값을 세팅해주면 브라우저 내의 쿠키값도 바뀐다
    */
    echo "country : ", $_COOKIE['country'], "<br>";

?>