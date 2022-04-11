<?php
    $arr = [10, 33, 12, 8, 1, 89, 11];

    for($i=0; $i<count($arr)-1; $i++)//반복범위는 배열수-1이어야 한다
    {
        for($z=$i+1; $z<count($arr); $z++)
        {
            if($arr[$i]<$arr[$z])
            {
                $temp = $arr[$i];
            }

            if($arr[$i]>$arr[$z])
            {
                $temp = $arr[$i];
                $arr[$i] = $arr[$z];
                $arr[$z] = $temp;
            }
        }
        print_r($arr);
        print "<br>";
    }
    print "<br>----------<br>";
    print_r($arr);

    //강사님 깃허브 자료 가져오기
?>