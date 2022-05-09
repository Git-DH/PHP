<?php
    $str1 = "http://www.php.edu/testurl.html?name=kim&age=28";

    $str2 = parse_url($str1);
    var_dump($str1, $str2);
    print "<br>";

    parse_str($str2["query"], $array);
    print "이름 : " . $array["name"] . ", 나이 : " . $array["age"] . "<br>";
    var_dump($array);
?>