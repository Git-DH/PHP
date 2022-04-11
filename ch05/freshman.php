<?php
    $freshman = array(
        "David" => "Computer",
        "Alice" => "Math",
        "Elsa"  => "Physics",
        "Bob"   => "Music",
        "Chris" => "Electronics"
    );
    // 숫자가 들어있는 배열은 순서가 있지만 문자는 없다
    // => 앞의 문자들이 방 이름이다

    print_r($freshman);
    print "<br>";
    print $freshman["David"] . "<br>";
    print $freshman["Alice"] . "<br>";
    print $freshman["Elsa"] . "<br>";
    print $freshman["Bob"] . "<br>";
    print $freshman["Chris"] . "<br>";

    $freshman["Bob"] = "Dance";
    print "<br><br>";
    print $freshman["Bob"] . "<br>";

    $freshman["Frank"] = "History";
    print $freshman["Frank"] . "<br>";

    $freshman["0"] = "안녕";
    $freshman[0] = "Hello"; //작동은 똑같이 한다
    print "<br><br>";
    print_r($freshman);
    // 문자열도 들어가지고 지정해서 넣을 수는 있지만 사용추천은 안함
?>