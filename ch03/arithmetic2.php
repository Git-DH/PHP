<?php
    // 증감 연산자
    $n1 = 10;
    
    $n1++;
    print "$n1 <br>";

    ++$n1;
    print "$n1 <br>";

    print " ! ------------<br>";

    $n2 = 10;
    $sum = 10 + $n2++;// ++, -- 만 가능
    // ++이 앞이면 우선 순위가 가장 높아짐
    print "$sum <br>";
    print "$n2 <br>";
    // =이 있을 때 ++이 뒤에 있으면 읽기 먼저 하고 쓰기를 함(앞에 계산후에 적용)

    $n2 = 10;
    $sum = 10 + ++$n2;// ++, -- 만 가능
    print "$sum <br>";
    print "$n2 <br>";

    print " !! ------------<br>";

    $n3 = 10;
    $n3 = $n3 + 1; // $n3++; / 사칙연산 부호 가능
    print "$n3 <br>";

    $n3 = 10;
    $n3 = $n3 + 2; // $n3++;
    print "$n3 <br>";

    print " !!! ------------<br>";

    $n4 = 10;
    $n4 += 2;
    print "$n4 <br>";

    print " !!!! ------------<br>";

    $oprd1 = '10';
    $oprd2 = 10;

    $result = $oprd1 == $oprd2;
    print "$oprd1 == $oprd2 : $result <br>";
    // ==비교는 안쪽의 값만 본다 !가 들어가면 반대값
    
    $result = $oprd1 === $oprd2;
    print "$oprd1 === $oprd2 : $result <br>";
    // ===비교는 안쪽값과 타입이 맞아야 한다

    $result = $oprd1 != $oprd2;
    print "$oprd1 != $oprd2 : $result <br>";

    $result = $oprd1 > $oprd2;
    print "$oprd1 > $oprd2 : $result <br>";

    /*
    <2진수>
    2로 계속 나눠서 마지막 결과와 나머지 숫자를 이어서 표현
    40=101000
    <10진수>
    마지막 2진수 자리를 2의0승으로 시작 1로 나온 부분만 계산
    */
?>