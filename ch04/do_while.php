<?php
    print "-- 시작 -- <br>";
    do{
        $r_val = rand(1, 10);
        print "r_val : $r_val <br>";
    } 
    while($r_val != 10);
    print "-- 끝 --";
    // while은 조건식 확인하고 진입
    // do_while은 내용을 실행 한 뒤에 체크