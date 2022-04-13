<?php

function counts()
{
    global $i;
    $i++;
}
    


$i = 0;
while($i < 10)
{
    counts();
    print $i . "<br>";
}
?>