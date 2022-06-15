<?php
class Fruit
{
    private $name;
    private $color;
    private $price;

    function __construct($name=null, $price=null, $color=null)
    {
        // public 생략해도 자동으로 붙는다.
        $this->name = $name;
        $this->color = $color;
        $this->price = $price;
    }
    // private 멤버필드 값 넣는법 2가지 1.생성자 2.setter메소드(없으면 생성된 값을 바꾸지 않는다는 뜻)
    // 값 빼내는법 1. getter메소드

    public function print_fruit()
    {
        print "Name : {$this->name}<br>";
        print "Color : {$this->color}<br>";
        print "Price : {$this->price}<br>";
    }
}

// 오버라이딩: 상속받은 객체 값을 바꾸는 것
// PHP 클래스에서 오버라이드는(Override) 부모 클래스의 메소드를 재정의 하는 것을 뜻합니다. 
// 재정의시에는 메소드명과 인자가 동일해야 합니다. 
// 접근제어자는 같거나 더 많이 허용하는쪽으로 지정할 수 있습니다.

$apple = new Fruit("Apple", 1000, "red");
$banana = new Fruit("Banana", 1000, "yellow");

$apple->print_fruit();
$banana->print_fruit();