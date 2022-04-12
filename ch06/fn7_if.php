<?php
    $mon = rand(0, 15);

    $season = get_season($mon);

    if($season) {print "${mon}월은 ${season}입니다.";}
    else {print "${mon}월은 잘못된 값";}
    //값이 빈칸으로 나오면 false가 나와 else로 출력

    function get_season($mon)//함수는 리턴 만나면 종료
    {
        if($mon < 1 || $mon > 12)      {return "";}//빈칸이 리턴됨
        if($mon < 3 || $mon === 12)    {return "겨울";}
        if($mon < 6)                   {return "봄";}
        if($mon < 9)                   {return "여름";}
        else                           {return "가을";}
    }
?>