<?php
$data = file("./name.txt");

print_r($data);

print "-----<br>";

foreach($data as $idx => $name){
    print "[$idx] : " . $name . "<br>";
}