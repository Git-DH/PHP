<?php
    $date = "September 30 2017";
    sscanf($date, "%s%d%d",$month, $day, $year);

    printf("%d/%s/%d", $year, $month,$day);

    //sscanf 함수는 주어진 문자열을 분리하고 지정된 변수에 저장하는 역할을 한다

    $str = "Hello world!!";

    printf(str_repeat($str, 5));
    //str_repeat는 문자열을 반복하는 함수이고 뒤에오는 숫자 만큼 반복을 한다