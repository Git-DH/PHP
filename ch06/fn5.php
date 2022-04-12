<?php
    $snum = 2;
    $enum = 8;
    print_num_from_to($snum, $enum);

    function print_num_from_to($snum, $enum)
    {
        if($snum > $enum)
        {
            print "종료값이 더 작을 수 없습니다.<br>";
            return; // 구글링으로 공부 더 하기
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