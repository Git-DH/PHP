<?php
    // Aceess Modifier
    // 접근제어 지시자
    // java: private default protected public
    // php: private protected public
    class Student {
        public $cnt = 3;
        public $studentId;
        public $studentName;

        public function printStudent($id, $name) {
            print "ID : {$id}<br>";
            print "Name : {$name}<br>";

            if($this->cnt == 0) {
                return;
            }
            $this->cnt--;
            $this->printStudent("111", "222");
        }
    }

    function printStudent($id, $name) {
        print "dddd : {$id}, {$name}";
    }

    $obj = new Student;
    $obj->studentId = 20171234;
    $obj->studentName = "Alice";
    $obj->printStudent($obj->studentId, $obj->studentName);

    printStudent("kkkk", "gggg");

    // php에서 배열과 객체의 차이점
    // 객체만 메소드를 가질 수 있다.