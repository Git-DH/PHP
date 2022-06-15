<?php
class Student
{
    private $studentId;
    private $studentName;

    function __construct(){}

    function printStudent()
    {
        print "ID : {$this->studentId}<br>";
        print "Name : {$this->studentName}<br>";
    }

    // getters(읽기), 파라미터 없음, 리턴 있음
    function getStudentId()
    {
        return $this->studentId;
    } // this: 호출한 나 자신의 객체 주소값

    // setters(쓰기), 파라미터 있음, 리턴없음
    function setStudentId($studentId)
    {
        $this->studentId = $studentId;
        return $this;
    }
}

$obj = new Student();
//print $obj->setStudentId(1122)->getStudentId() . "<br>";      
print "1번째 : " . $obj->setStudentId(1122)->getStudentId() . "<br>";
// return $this가 있어서 접근이 가능
$obj2 = new Student;
print $obj2->setStudentId(8888)->getStudentId() . "<br>";
print "2번째 : " . $obj->getStudentId() . "<br>";
// obj에 접근해서 set값을 넣은적은 1122한번이 다다

// $obj->printStudent();
