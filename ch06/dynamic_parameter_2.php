<?php
    // 가변인자 함수
    // 복수로 함수에 값을 길이에 상관없이 할당 하기위해 사용
   
    function multi()
    {
        print "count : " . count(func_get_args()) . "<br>";
        print "[1] : " . func_get_args()[1] . "<br>";
    }

    multi(2, 10);
    multi(5, 10);
   
    /*
    func_num_args() : 인자수 리턴
    func_get_arg()  : 인자값 가져올 때 사용
    func_get_args() : 인자배열로 받음
    -위에는 옛날버전 형식-
    print_sum(...$vals) : 알아서 배열로 할당 해준다 = func_get_args()

    */
    function print_sum()
    {   
        print "func_num_args() : " . func_num_args() . "<br>"; // 2, 3
        print "func_get_arg(0) : " . func_get_arg(0) . "<br>"; // 10, 9
        print "func_get_arg(1) : " . func_get_arg(1) . "<br>"; // 20, 11
        print "-------<br>";
    }

    //print_sum(10, 20);
    //print_sum(9, 11, 13);

    function sum() //밑에 있는 sum값을 가져옴
    {
        print "count : " . count(func_get_args()) . "<br>";
        $sum = 0;
        foreach(func_get_args() as $val)
        {
            $sum += $val;
        }
        return $sum;
    }

    print "sum : " . sum(1, 2) . "<br>";
    print "썸 : " . sum(1, 2, 10) . "<br>";
    // 넣은 값만큼 자동으로 인식 됨
    
?>