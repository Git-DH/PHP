<?php
    $mon = rand(1,12); // 범위 안에서 랜덤 출력

    switch($mon)
    {
        case 3: case 4: case 5:
            print "${mon}월은 봄";
            break;

        case 6: case 7: case 8:    
            print "${mon}월은 여름";
            break;
            
        case 9: case 10: case 11:
            print "${mon}월은 가을";
            break;

        case 12: case 1: case 2:
            print "${mon}월은 겨울";
            break;
        
        default: 
            print "계절 없음";
            break;
    }
?>