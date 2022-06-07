<?php
    function inc()
        {
            static $i = 1;// 젤 처음 호출시에만 실행
    // static(정적)이 없다면 호출이 끝날때마다 다시 돌아가 1만 출력 된다
            print $i++ . "<br>";
        }

        $z = 1;
        function inc2()
        {
            global $z; // 함수 안에서 전역변수를 쓰기위해 global을 쓴다.
            print $z . "<br>";
            $z += 1;
        }

        for($i=0; $i<10; $i++)
        {
            inc2();
        }
    
?>