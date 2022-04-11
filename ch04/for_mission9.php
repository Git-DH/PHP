<?php
    $star = rand(3, 10);
    print $star .  "<br>";

    for ($i=0; $i<$star; $i++)
    {
        for ($z=0; $z<=$i; $z++)
        {
            print "*";
        }
        print "<br>";
    }
    

    $star = rand(3, 10);
    print $star .  "<br>";
    $sum = " ";
    for ($z=1; $z<=$star; $z++)
    {
        $sum = $sum . "@";
        print "${sum}<br>";
    }
?>