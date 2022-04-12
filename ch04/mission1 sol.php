<?php    
    /*
        90점 이상 A (3점 이하, '-', 7점 이상 or 100점 '+')
        => 93: A-, 95: A, 98: A+
        80점 이상 B (3점 이하, '-', 7점 이상 '+')
        70점 이상 C (3점 이하, '-', 7점 이상 '+')
        60점 이상 D (3점 이하, '-', 7점 이상 '+')
        60점 미만 F
        0~100 점수가 아니면 "잘못된 값" 출력
    */
    $score = rand(0, 120);
    print "점수 : $score <br>";
    
    if($score > 100 || $score < 0) 
    {
        print "잘못된 값";
    } 
    else 
    {
        $sign = "F";
        $symbol = "";
        $val_1 = intval($score / 10); // floor사용도 가능
        // 일정한 값으로 나누어 구분하고 거기에다가 코드를 적용시킴   
        // intval로 변수를 10으로 바꾸고 정수 값 만 구했다
        switch($val_1) 
        {
            case 10: case 9:
                $sign = "A";
                break;
            case 8:
                $sign = "B";
                break;
            case 7:
                $sign = "C";
                break;
            case 6:
                $sign = "D";
                break;
        }
        $val_2 = $score % 10;
        if($score > 60)
        {
            if($score === 100 || $val_2 >= 7)
            {
                $symbol = "+";
            } 
            else if($val_2 <= 3)
            {
                $symbol = "-";
            }
        }
        print $sign . $symbol;
    }
    // else if는 무한대로 가능하지만 순서대로 실행되고 가장 빨리 만나는 true값만 실행
    // else if if안에 참 조건을 추가 가능
?>