<?php
    $str = 'one/two/three/four';

    $value = explode('/',$str);
    print_r($str. "<br>");
    foreach($value as $val)
    print $val. "<br>";

    print "<br>";

    $value = explode('/', $str ,2);
    foreach(explode('/', $str ,2) as $val);
    print $val. "<br>";

    $numbers = array(1,2,3,4);
    
    $string = implode($numbers );

    printf("%s",$string);