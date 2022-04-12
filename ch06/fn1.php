<?php
    $n1 = 9;
    $n2 = 5;
    // 깃허브에서 강사님꺼 가져와서 하나 더 만들기 - 간소화 버전(중요)

    function sum($n1, $n2)
    {
        return $n1 + $n2;
    }

    $result = sum($n1, $n2);

    print "$n1 + $n2 = $result <br>";
    
    function minus($n1, $n2)
    {
        return $n1 - $n2;
    }

    $result = minus(9, 5);

    print "$n1 - $n2 = $result <br>";

   
    function multi($n1, $n2)
    {
        return $n1 * $n2;
    }

    $result = multi(9, 5);

    print "$n1 * $n2 = $result <br>";


    function div($n1, $n2)
    {
        return $n1 / $n2;
    }

    $result = div(9, 5);

    print "$n1 / $n2 = $result <br>";


    function mod($n1, $n2)
    {
        return $n1 % $n2;
    }

    $result = mod(9, 5);

    print "$n1 % $n2 = $result <br>";


    print_sum($n1, $n2);
    print_minus($n1, $n2);
    print_multi($n1, $n2);
    print_div($n1, $n2);
    print_mod($n1, $n2);
?>