<?php
    define("NAME", "홍길동");
    define("NAME2", "장보고");
    define("STAND_AGE", 25);

    //상수 const vs 리터럴 Liretal
    //값 자체가 리터럴
    //상수는 값이 한번 입력되면 바꿀 수 없는 것이다

    print NAME;
    print NAME2;
    print STAND_AGE;
    print "--------<br>";

    function fn1()
    {
        print "fn1 : " . NAME . "<br>";
    }
?>