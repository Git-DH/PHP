<?php
    // Aceess Modifier
    // 접근제어 지시자
    // java: private default protected public
    // php: private(클래스 안에서만 사용가능) protected() public(완전오픈-제약없음)
    class Student { // 클래스명을 적을 때 첫글자는 대문자로 써야 한다.
        private $studentId;
        private $studentName;

        public function printStudent($id, $name) {
            print "ID : {$id} <br>";
            print "Name : {$name}<br>";
        }
    }
    // 멤버필드(상수, 변수): 상수는 public으로 가능하고 변수는 은닉화 한다.

    $obj = new Student;
    // $obj->studentId; 접근하려도 하면 에러 터짐
    $obj->printStudent(12122, "홍길동");