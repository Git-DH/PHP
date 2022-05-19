<?php
    $arr = array();

    $val = 10;
    for($i=0; $i<30; $i++) {
        $arr[$i] = $val;
        $val += 10;
    }

    for($i=0; $i<count($arr); $i++) {
        print "arr[$i]: $arr[$i]<br>";
    }

    
