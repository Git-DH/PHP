<?php

$n = "M";
A();
B();

function A() 
{
    global $n;
    print $n . "<br>";
    return;
}

function B()
{       
    $n = "B";
    A();
    return;
}