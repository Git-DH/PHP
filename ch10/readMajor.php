<?php
$data = file("./major.txt");

print_r($data);

print "-----<br>";

foreach($data as $line){
    $div = explode(" ", $line);
    // explode()는 문자열을 분할하여 배열로 저장하는 함수
    // explode(문자열 분할 기준, 분할할 문자열, 분할개수(필수아님))
    // 분할개수가 음수인 경우, 뒤에서부터 제거

    // print $line . "<br>";
    // print $div[0] . " , " . $div[1] . "<br>";
    print "Name : {$div[0]}, Major : {$div[1]} <br>";
}