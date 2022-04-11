<?php
    //2차원 배열

    $matrix = array( // 첫번째 array의 자식은 3개 ,보면 됨
        array(1, 2, 3, 0), // 이것도 3개 부모자식 관계를 구분해야함
        array(4, 5, 6, 0),
        array(7, 8, 9, 0),
    );

    print_r($matrix);
    print "<br><br>";

    print $matrix[1][1];
    // 처음 대괄호는 가장 먼저 만나는 부모array를 기준으로 함
    // 다음 대괄호는 자식array를 기준으로 함
    // 아래의 코드를 한번에 적은거

    $child1 = $matrix[1]; // array(4, 5, 6), 배열에 갈 수 있는 주소값
    print $child1[1]. "<br>";
    // 위의 주소값을 주고나서 자식 array에 접근후 값을 나타낸 것

    print "matrix count : " . count($matrix) . "<br>";
    print "matrix[0] count : " . count($matrix[0]) . "<br>";
    print "matrix[1] count : " . count($matrix[1]) . "<br>";
    print "matrix[2] count : " . count($matrix[2]) . "<br>";

?>