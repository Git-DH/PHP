<?php
    $x = 10;

    foreach($GLOBALS as $key => $var)
    {
        print $key . " : ";
        print_r ($var);
        print "<br>";
    }

    // php에서 print는 문자열만 가능하고 객체는 불가능하다.

?>