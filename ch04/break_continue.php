<?php
    print "----------- break ----------- <br>";
    for($i=0; $i<20; $i++)
    {
        if($i == 12) {break;}
        // 반복문에서 break를 만나면 바로 나오므오 12는 찍히지 않는다
        // 중간에 멈추고 싶을때 쓴다
        print $i . "<br>";
    }

    print "---------- continue ------------ <br>";
    for($i=0; $i<20; $i++)
    {
        if($i == 12) {continue;}
        // continue를 만나면 그 값의 실행은 스킵되고 이어서 다음 값이 실행됨
        // 증감식으로 다시 돌아감
        // 조건에 따라서 여러번 실행 될 수 있다
        print $i . "<br>";
    }



?>