<?php
$scores = array(
    // 국, 영, 수
    array(100, 100, 100),   //영자
    array(90, 80, 70),      //순자
    array(55, 65, 75),      //영철
);

$names = array("영수", "순자", "영철"); //위에 따라서 라인을 맞춤
$each_sum = array(0, 0, 0); //배열의 총 합을 구하기 위해 만듬
$avg = array(0,0,0);
for($i=0; $i<count($scores); $i++) // 배열의 순번을 고를 수 있도록 함 /줄
{
    for($z=0; $z<count($scores[$i]); $z++) // 자식 array의 개수 /칸
    {
        $each_sum[$i] += $scores[$i][$z]; //총합 배열에 값을 넣음
        // 값을 넣어 줄 변수가 필요하다
        
    }
    $avg[$i] = $each_sum[$i] / count($scores[$i]); 
}

// 위의 for문이 끝나면 밑의 for문이 실행 된다
for($c=0; $c<count($names); $c++)// 위의 줄에다가 이름 넣은거
{
    print $names[$c] . " : " . $each_sum[$c] . " : " . $avg[$c] . "<br>";
}
?>