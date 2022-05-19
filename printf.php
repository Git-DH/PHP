<?php
    $name = "홍길동";
    $age =22;
    $height = 177.32;
    $blood_type = '0';

    printf("제 이름은 %s입니다. 나이는 %d세이고, 키는 %.1fcm입니다. 혈액형은 %s입니다."
    , $name, $age, $height, $blood_type);
    /*
    printf = %s는 문자열, %d는 정수값, %f는 실수값 / %.1f에서 .1은 소수점 몇자리까지 표시하라는 뜻 / %04d에서 04은 4가 4자리 공간을 사용하고 빈자리는 0으로 채운다는 뜻
    */
    // sprintf는 리턴을 통해서 문자열을 보여주는것이고 printf는 리턴 없이 그냥 브라우저에 찍히는 것이다
    $str = sprintf("제 이름은 %s입니다. 나이는 %d세이고, 키는 %.1fcm입니다. 혈액형은 %s입니다."
            , $name, $age, $height, $blood_type);
        print "$str";
    // sprint를 리턴하고 싶으면 변수를 정하여 값을 넣어주면 된다