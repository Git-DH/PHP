<?php
    /*
    $rand(1, 10) 실행을 시킬건데 10이 나올때까지 반복한다
    */
   
    print "-- 시작 -- <br>";
    $r_val = rand(1, 10);
    while($r_val != 10)
    {
        $r_val = rand(1, 10);
        print "r_val : $r_val <br>";
    } 
    print "-- 끝 -- <br>";


    
    print "-- 시작 -- <br>";
    while(true)
    {
        $r_val = rand(1, 10);
        if($r_val == 10) {break;}
        print "r_val : $r_val <br>";
    } 
    print "-- 끝 --";

?>