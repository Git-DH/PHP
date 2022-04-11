<?php
    $num = 11;
    $odd_even = '홀'; // 디폴트 값을 설정하여 코드의 중복을 없앰

    if($num % 2 === 0)
    {
        $odd_even = '짝';
    }
        print "${num} 은 ${odd_even}수 입니다.";
?>