<?php
    
    $arr = [10, 20, 30, 40, 50];
    plus_array($arr, 10);
    print_r($arr);

    function plus_array(&$arr, $val)// referance 방식
    {
        foreach($arr as $k => $v)
        {
            $arr[$k] = $v + $val;
        }
    }

?>