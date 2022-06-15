<?php
// exam6.txt 파일을 읽어서 전부 대문자로 변경 후
// exam6_capital.txt에 저장해 주세요.

$filep = file("./exam6.txt");
// file(): 파일 내용을 배열로 읽어들이는 함수
$nfilep = fopen("./exam6_capital.txt", "a");

foreach($filep as $line){
    $capital = strtoupper($line);
    fputs($nfilep, $capital);
}

fclose($nfilep);