<?php
    // 버블 정렬
    // 배열 비교를 하고 큰 배열을 계속 뒤로 보냄 / 뒤에서 부터 정렬
    // 제일 큰 값이 자리 잡으면 그 값을 제외하고 다시 비교함
    // 반복되는 수의 횟수는 전체 배열보다 하나 적어야 한다

    $arr = [10, 33, 12, 8, 1, 89, 11];
    
    
    for($i=count($arr)-1; $i>0; $i--)//$i를 ++로 바꿔서 해보자
    {
        for($z=0; $z<$i; $z++)
        {
            if($arr[$z] > $arr[$z+1])
            {//if값에 적용이되면 다음자리로 값을 옮긴다
                $temp = $arr[$z];
                $arr[$z] = $arr[$z+1];
                $arr[$z+1] = $temp;
            }
        }
        print_r($arr);
        print "<br>";
    }
    // 다시 공부하기
    print "<br>";
    print_r($arr);
    print "<br>------------------<br>";

   
    // 버블 정렬
    // 배열 비교를 하고 큰 배열을 계속 뒤로 보냄
    // 제일 큰 값이 자리 잡으면 그 값을 제외하고 다시 비교(반복)함
    // 반복되는 수의 범위는 전체 배열수보다 하나 적어야 한다
    
?>