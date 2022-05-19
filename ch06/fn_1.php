<?php

function sum($n1, $n2) {// 매개변수에 값이 들어감
    return $n1 + $n2;
}

function void_sum($n1, $n2) {
    print "sum : " . $n1 + $n2 . "<br>";
    return;
}

$n1 = 30;
$n2 = 20;

void_sum($n1, $n2); // 보이드 함수의 호출 형식
void_sum($n1, $n2);

$result = sum($n1, $n2); //위의 비보이드 함수에 값이 들어가고 그 값이 리턴
print "썸썸 : " . sum($n1, $n2) . "<br>"; 
print "썸 : $result <br>";
print "sum : $result <br>";
print "sum * 2: " . ($result*2) . "<br>";
// 보이드 함수 보다 값의 변경이 유연함