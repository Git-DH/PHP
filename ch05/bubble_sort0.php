<?php
    // 버블 정렬
    // 배열 비교를 하고 큰 배열을 계속 뒤로 보냄
    // 제일 큰 값이 자리 잡으면 그 값을 제외하고 다시 비교함
    // 반복되는 수의 범위는 전체 배열보다 하나 적어야 한다

    $arr = [10, 33, 12, 8, 1, 89, 11];
    
    
    for($i=0; $i<count($arr); $i++)
    {
        for($z=0; $z<count($arr)-1; $z++)
        {
            if($arr[$z] > $arr[$z+1]){
                $temp = $arr[$z];
                $arr[$z] = $arr[$z+1];
                $arr[$z+1] = $temp;
            }
        }
        print_r($arr);
        print "<br>";
    }
    print_r($arr);
?>