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
       // 이거 이해 해보기
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