<?php
    function swap_val($n1, $n2)
    // 밑에서 값을 복사해 가져온 것이라 
    // 여기서 변수 값을 바꿔도 밑에는 바뀌지 않는다
    {
        $temp = $n1;
        $n1 = $n2;
        $n2 = $temp;
    }

    function swap_ref(&$n1, &$n2)
                // 참조값(주소값)
    // global빼고 같은 기능을 가진건 없다
    {
        $temp = $n1;
        $n1 = $n2;
        $n2 = $temp;
    }
    

    $a = 10;
    $b = 30;

    print "a: $a, b: $b <br>";
    swap_val($a, $b);
    //$n1과 $n2에 값을 보내지만 다른 저장공간이다
    // call by value는 값만 복사해서 주는것이다
    // 메모리 낭비가 엄청 나다
    print "a: $a, b: $b <br>";
    print "-------<br>";
    print "a: $a, b: $b <br>";
    swap_ref($a, $b);
    // call by referance는 공간의 주소값을 이용해 필요한 값으로 도달하는 것이다
    // 필요하면 값을 받은 공간으로 접근이 가능함
    print "a: $a, b: $b <br>";
?>