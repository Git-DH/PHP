<?php
    // 1~3 까지 더한 값
    // 1 + 2 + 3 = 6

   /*
   $sum = 0;

   $sum = $sum + 1; // 0+1
    
    $sum = $sum + 2; // 1+2
    
    $sum = $sum + 3; // 3+3

    print $sum;
    */

    $sum = 0; // for문 안에 있으면 계속 초기화 되버린다
    for($i=1; $i<=100; $i++)
    {
        $sum += $i; // $sum = $sum + $i
    }
    print $sum;
?>