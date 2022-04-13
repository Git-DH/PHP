<?php
    $star = rand(3, 10);

    //print_star($star);
    //print_star_line($star);
    print_star_triangle($star);

    function print_star_triangle($star)
    {
        for($i=1; $i<=$star; $i++)
        {
            print_star($i);
            print "<br>";
        }
       // 밑에 for문의 범위 값을 정해준 것
    }


    function print_star_line($star)
    {
        for($i=0; $i<$star; $i++)
        {
            print_star($star);
            print "<br>";
        }
        
    }
    
    
    
   function print_star($star)
    {
        for($i=0; $i<$star; $i++)
        {
            print " * ";
        }
    }


?>