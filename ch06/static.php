<?php
    function inc()
        {
            static $i = 1;// 젤 처음 호출시 실행되고 사라진다
    // static(정적)이 없다면 호출이 끝날때마다 다시 돌아가 1만 출력 된다
            print $i . "<br>";
            $i += 1;
        }

        $z = 1;
        function inc2()
        {
            global $z;
            print $z . "<br>";
            $z += 1;
        }

        for($i=0; $i<10; $i++)
        {
            inc();
        }
    
?>