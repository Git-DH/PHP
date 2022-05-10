<?php
    $str0 = "Apple Banana Pear";

    $str1 = chop($str0);
    print "start--" . $str1 . "--end<br>\n";

    $str2 = rtrim($str0);
    print "start--" . $str2 . "--end<br>\n";

    $str3 = ltrim($str0);
    print "start--" . $str3 . "--end<br>\n";

    $str4 = trim($str0);
    print "start--" . $str4 . "--end<br>\n";
    // trim은 문자열에서 공백을 지우는 역할이다
    // trim([대상 문자열], [제거할 문자열]); 형식을 사용하면 문자열을 지울수도 있다
    // (\n)은 삭제된 빈공간에 속하는 문자표시중 하나이고 NewLine이란 뜻을 가지고 있다