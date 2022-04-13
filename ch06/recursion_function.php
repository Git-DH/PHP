<?php
    // 재귀함수(딱히 안써도 된다)
    // 내가 함수라면 내가 나을 호출하는 것. 팩토리얼에 많이 씀

    $num = 5;
    $result = factorial($num); // 3 x 2 x 1
    print "${num} ! = $result <br>";

    function factorial($num)
    {
        $result = 1; // 이부분 잘 못 만듬(함수는 함수안에서 해결 잊지말기)
       for($i=2; $i<=$num; $i++)
       {
           $result *= $i;
       }
       return $result;
    }

    function factorial_rec($num) //재귀함수
    {
        if($num === 1) {return 1;}//리턴의 종료 조건
        return $num * factorial_rec($num - 1);
            // $num x (n-1)!의 식과 같다
    }

    $num = 6;
    $result = factorial_rec($num); // 3 x 2 x 1
    print "${num} ! = $result <br>";
    
    for($i=1; $i<=10; $i++)
    {
        print "factorial($i) = " .  factorial($i) . "<br>";
    }


?>