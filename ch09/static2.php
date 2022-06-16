<?php
// static의 저장소는 하나다.
// 객체마다 다른값을 줄거면 static을쓰면 안된다.
// 여기서 self = Computer
class computer {
    private static $brand;
    public $price;

    // function __construct()
    // {
    //     self::$brand = "2";
    // } 생성자 함수에 변수값을 주기도 한다.

    static function setBrand($brand) {
        self::$brand = "LG";
    } // private인 멤버필드에 값을 줬다.

    function myPrint() {
        print "컴퓨터 브랜드는 " . self::$brand. ", 가격은 {$this->price}입니다.<br>";
    }
    static function myStaticPrint() {
        print "컴퓨터 브랜드는 " . self::$brand. ", 가격은 입니다.<br>";
        // static은 static이 붙은 멤버필드가 아니면 바로 사용이 불가능 하다.
        // $this->price멤버필드는 new를 이용해 메모리를 올려야 사용이 가능하다.
    }
}

$c = new Computer;
$c->price = 10000;

$c2 = new computer;
$c2->price = 20000;

$c->myPrint();
$c2->myPrint();

Computer::setbrand("LG");
$c->myPrint();
$c2->myPrint();