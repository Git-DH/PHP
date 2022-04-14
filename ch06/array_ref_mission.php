<?php
    
    $arr = [10, 20, 30, 40, 50];
    $num = 10;
    plus_array($arr, $num);
    print_r($arr);

    function plus_array(&$arr, &$val)
    // 일반 숫자값 옆에는 &을 붙이면 에러 터진다
    {
        $val = 6;
        foreach($arr as $k => $v)
        {
            $arr[$k] = $v + $val;
        }
    }

?>