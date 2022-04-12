<?php
    if(isset($name)) {
        print "name is ok!!";
    } // 여기선 name에 값이 없어서 안 뜬다
      // = 으로 값을 줘야 값이 생긴다

    $name = "HongGildong"; 
    if(isset($name)) {
        print "name is ok!!";// 변수에 값이 있는지 확인
    }// name값 밑에 넣음 나온다
    print $name . "<br>";
    print isset($name);

    unset($name); // 변수 해제로 인해 깊은 복사가 안 됨
    print $name . "<br>";

    print "The End";
?>