<?php
    $score = array(1, 2, 3, 4);
    $score2 = $score;
    // php의 경우 깊은 복사가 되어 다른 배열을 그대로 복사한다
    // 때문에 같은 모양의 다른 배열이 복사되는 것이다
    // 이럴 경우 메모리 사용이 커진다(=느려진다)

    print_r($score);
    print "<br>";
    print_r($score2);
    print "<br>";

    $score2[0] = 100;

    print_r($score);
    print "<br>";// 깊은복사로 인해 둘은 형태가 같을 뿐 별개이므로 변하지 않는다
    print_r($score2);
    print "<br>";
?>