<?php
    $arr_age = array(
        "Peter" => 35,
        "Ben" => 37,
        "Joe" => 43,
        "John" => 24,
    );

    //값 정렬
    //sort(오름차순), rsort(내림차순)
    // 1-10순서       10-1순서

    $copy_arr_1 = $arr_age;
    print "copy : ";
    print_r($copy_arr_1);
    print "<br>";

    rsort($copy_arr_1);
   
    print "origin : ";
    print_r($arr_age);
    print "<br>";
    print "copy : ";
    print_r($copy_arr_1);
    print "<br>";
    print "origin : ";
    print_r($arr_age);// 깊은복사(실제로 같은거 하나 더 생김)로인해 영향을 받지 않았다
    print "<br> ------------------ <br>";

    //키정렬
    //ksort(오름차순), krsort(내림차순)

    $copy_arr_2 = $arr_age;
    print "copy2 : ";
    print_r($copy_arr_2);
    print "<br>";

    ksort($copy_arr_2);

    print "copy2 : ";
    print_r($copy_arr_2);
    print "<br>";

    //키값이 유지 돼야 한다면
    // asort , arsort를 쓰면 된다
    

?>