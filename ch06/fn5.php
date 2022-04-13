<?php
    $snum = 2;
    $enum = 8;
    print_num_from_to($snum, $enum);

    function print_num_from_to($snum, $enum)
    {
        if($snum > $enum)
        {
            print "종료값이 더 작을 수 없습니다.<br>";
            return; 
            // 함수는 리턴 만나면 무조건 종료 밑에 조건을 건드리지 않음
        }

        print " [ ";
        for($i=$snum; $i<=$enum; $i++) 
        {
            if($i>$snum){print " , ";}
            print  $i;
        }
        print " ] ";
           
    }
    
?>