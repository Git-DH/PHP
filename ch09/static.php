<?php

class Calc {
    function sum($n1, $n2) {
        return $n1 + $n2;
    }
}

// Calc를 객체화 변수명은 c
// sum 메소드를 호출. 5, 10을 더한 값을 리턴받고 화면에 출력하시오.

$c = new Calc();
// 객체화 중요!!
$result = $c->sum(5, 10);
print "result : " . $result . "<br>";

class StaticCalc {
    static function sum($n1, $n2) {
        return $n1 + $n2;
    }
    // static이 있으면 메모리에 먼저 올라간다.
    // 메모리에 이미 올라 갔으므로 바로 호출이 가능(::를 써야한다)
}

$result = StaticCalc::sum(10, 11);
print "result : " . $result . "<br>";