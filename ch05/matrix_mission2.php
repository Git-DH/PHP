<?php
    $scores = array(
        // 국, 영, 수
        array(100, 100, 100),   
        array(90, 80, 70),      
        array(55, 65, 75),
        array(90, 88, 55),      
    );

    $names = array("국어", "영어", "수학");

    for($i=0; $i<count($scores); $i++)
    {
        for($z=0; $z<=count($scores[$i]); $z++)
        {
            $cls_sum[$z] += $scores[$i][$z];
            
        }
        /*
        이런식으로 단정지어서 for문은 작성하면 자동으로 값 추가 시 작동하기 힘들고
        뒤의 for문 부터는 앞의 배열 값도 같이 계산 되어 답이 안나온다
        */
    }

    for($c=0; $c<1; $c++)
    {
        $sum = $cls_sum[$z];
        $avg = $sum / count($scores);
        print $names[0] . "  합계 : " . $cls_sum . "<br>"; 
        print $names[0] . "  평균: " . $avg . "<br>"; 
    }

   
?>