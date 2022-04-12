<?php
    $n1 = 9;
    $n2 = 5;
    // 간소화 버전(중요)
    
    function print_result($num1, $symbol, $num2, $result)
    {
        print "$num1 $symbol $num2 = $result <br>";
    }   // 밑의 함수의 값을 불러와 print한다
    function print_sum($num1, $num2) 
    {
        $result = $num1 + $num2;
        print_result($num1, "+", $num2, $result);
    }
    function print_minus($num1, $num2) 
    {
        print_result($num1, "-", $num2, ($num1 - $num2));
    }
    function print_multi($num1, $num2) 
    {
        print_result($num1, "*", $num2, ($num1 * $num2));
    }
    function print_div($num1, $num2) 
    {
        print_result($num1, "/", $num2, ($num1 / $num2));
    }
    function print_mod($num1, $num2) 
    {
        print_result($num1, "%", $num2, ($num1 % $num2));
    }
    print_sum($n1, $n2);
    print_minus($n1, $n2);
    print_multi($n1, $n2);
    print_div($n1, $n2);
    print_mod($n1, $n2);
   
?>