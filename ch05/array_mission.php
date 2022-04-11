<?php
    $score_arr = array(100, 90, 33, 87, 65);

    $sum = 0; // 합계 값 저장을 위해 사용 - 초기화 하는 습관을 들이자
    $len = count($score_arr);
    for($i=0; $i<$len; $i++) 
    {
        $sum += $score_arr[$i];
    }
    $avg = $sum / $len; // 결과 값을 복사하여 왼쪽에 준다

    print "합계: $sum <br>";
    print "평균: $avg <br>"; 
   
   /* 
    $sum += $score_arr[0];
    $sum += $score_arr[1];
    $sum += $score_arr[2];
    $sum += $score_arr[3];
    $sum += $score_arr[4]; 
    */

   
   
   
   
    /*print array_sum($score_arr);
    print "<br>";
    print array_sum($score_arr) / count($score_arr);*/

?>