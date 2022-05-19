<?php
    $arr = [4, 9, 10, 22, 100, 45, 99];

    for($i=count($arr)-1; $i>=0; $i--){
        print $arr[$i] . "<br>";
    }
    
    print "----------------<br>";

    $len = count($arr);
    for($i=1; $i<=$len; $i++){
        print $arr[$len - $i] . "<br>";
    }