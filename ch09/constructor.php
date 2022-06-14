<?php
    class Fruit {
        private $name;
        private $color;
        private $price;

        function __construct($name, $price, $color) {
            // public 생략해도 자동으로 붙는다.
            $this->name = $name;
            $this->color = $color;
            $this->price = $price;
        }
        // private 멤버필드 값 넣는법 2가지 1.생성자 2.setter메소드(없으면 생성된 값을 바꾸지 않는다는 뜻)
        // 값 빼내는법 1. getter메소드

        public function print_fruit() {
            print "Name : {$this->name}<br>";
            print "Color : {$this->color}<br>";
            print "Price : {$this->price}<br>";
        }
    }

    $apple = new Fruit("Apple", 1000, "red");
    $banana = new Fruit("Banana", 1000, "yellow");

    $apple->print_fruit();
    $banana->print_fruit();