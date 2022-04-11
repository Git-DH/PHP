<?php
    $result = 1;
    if($result > 0)
    {
        //$result = $result / 2; 나누기보다는 곱하기가 처리 속도가 높다
        //$result = $result * 0.5;
        $result *= 0.5; // 산술 대입 연산자
        // result만 건드림
        print "$result <br>";
        print "positive <br>";
    }
    else
    {
        print " $result <br>";
        print "negative <br>";
    }
?>