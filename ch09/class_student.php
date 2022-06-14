<?php
    // Aceess Modifier
    // 접근제어 지시자
    // java: private default protected public
    // php: private protected public
    class Student { // 클래스명을 적을 때 첫글자는 대문자로 써야 한다.
        public $studentId;
        public $studentName;

        public function printStudent($id, $name) {
            print "ID : {$id} <br>";
            print "Name : {$name}<br>";
        }
    }

    $obj = new Student;
    $obj->studentId = 20171234;
    $obj->studentName = "Alice";

    $obj->printStudent($obj->studentId, $obj->studentName);

    // php에서 배열과 객체의 차이점
    // 객체만 메소드를 가질 수 있다.