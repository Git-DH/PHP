<?php
    //$dan = rand(2, 9);

    //print_gugudan($dan);// return 값이 없다

    print_gugudan_form_to(2, 6);

    function print_gugudan_form_to($n1, $n2)
    {
        for($dan=$n1; $dan<=$n2; $dan++)
        {
            print_gugudan($dan); //밑의 코드와 같기 때문에 호출 함
            print "<br>---------------<br>";
        }
    }


    function print_gugudan($dan)// 이 함수 안에서 해결하는거다
    {
        print "dan =" . $dan . "<br>";
        for($i=1; $i<10; $i++)
        {
            $result = $dan * $i;
            print "$dan x $i =" . $result . "<br>";
            //  print "$dan x $i =" . ($dan * $i) . "<br>";
        }
        
    }
?>