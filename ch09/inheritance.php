<?php

class People {
    protected $name;
    protected $age;
    // protected: 상속관계일 경우 클래스를 벗어나도 사용가능

    function printPoeple()
    {
        print "Name : {$this->name}<br>";
        print "Age : {$this->age}<br>";
    }
}

class Student extends People {
    // extends: 상속 받는 다는 뜻
    private $studentId;

    function __construct($name, $age, $studentId)
    // 생성자 사용시에는 __construct를 사용한다.
    {
        $this->name = $name;
        $this->age = $age;
        $this->studentId = $studentId;
    }

    function printStudent() {
        print "- Student - <br>";
        $this->printPoeple();
        print "Id : {$this->studentId}<br>";
    }

    function printPoeple()
    {
        print "Student에 있는 print people<br>";
    }
}
// 오버라이드: 상속받은 객체 값을 바꾸는 것
// PHP 클래스에서 오버라이드는(Override) 부모 클래스의 메소드를 재정의 하는 것을 뜻합니다. 
// 재정의시에는 메소드명과 인자가 동일해야 합니다. 
// 접근제어자는 같거나 더 많이 허용하는쪽으로 지정할 수 있습니다.
$stu1 = new Student("홍길동", 21, 1010);
$stu1->printPoeple();
print "-------------<br>";
$stu1->printStudent();