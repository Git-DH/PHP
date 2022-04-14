<?php
    $seoul = getdate();


    print "현재시간 : ". 
        $seoul["year"] . "년" . 
        $seoul["mon"] . "월" .
        $seoul["mday"] . "일" .
        $seoul["hours"] . "시" .
        $seoul["minutes"] . "분" .
        $seoul["seconds"] . "초";
        // php 설정 기준(아시아, 서울)
    print "<br>-----------<br>";

    $year = gmdate("Y");
    $mon = gmdate("m");
    $day = gmdate("d");
    $hour = gmdate("H");
    $min = gmdate("i");
    $sec = gmdate("s");
    // gmt(세계표준시간)기준
    print "현재시간 ${year}년 ${mon}월 ${day}일 ${hour}:${min}:${sec}<br>";
?>