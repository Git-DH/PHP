<?php
    $score = 90;

    switch($score)
    {
        case 100:
            print "당신의 성적은 A입니다.";
            break; // break를 만날때 까지 결과가 나타난다.

        case 90:
            print "당신의 성적은 AB입니다.";
            break; // 범위지정 가능    

        case 80:
            print "당신의 성적은 B입니다.";
            break;
        
         case 60:
            print "당신의 성적은 C입니다.";
            break;

        case 0:
            print "당신의 성적은 F입니다.";
            break;
    }
?>