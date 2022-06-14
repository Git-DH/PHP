<?php
class Student {
    private $studentId;
    private $studentName;

    // getters(읽기), 파라미터 없음, 리턴 있음
    public function getStudentId() {
        return $this->studentId;
    }
    // this: 호출한 나 자신의 객체 주소값

    public function getStudentName() {
        return $this->studentname;
    }

    // setters(쓰기), 파라미터 있음, 리턴없음
    public function setStudentId($studentId) {
        $this->studentId = $studentId;
    }

    public function setStudentName($studentName) {
        $this->studentName = $studentName;
    }

    public function printStudent() {
        print "ID : {$this->studentId} <br>";
        print "Name : {$this->studentName}<br>";
    }
}

$obj = new Student;
$obj->setStudentId(1122);
$obj->setStudentName("홍길동");
$obj->printStudent();