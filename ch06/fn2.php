<?php
   $num = rand(1, 10);

   print_odd_even($num);

    /*function print_odd_even($n)
    {
        $result = $n % 2 === 0 ? "짝" : "홀"; //삼항 연산자 사용
        print "숫자 ${n}(는) ${result}수입니다.";
    }*/
    
    function print_odd_even($n) // if문으로 가능하다
    {
        if($n % 2 === 0) {print "숫자 ${n}(는) 짝수입니다.";}
        else {print "숫자 ${n}(는) 홀수입니다.";}
    }
   
?>