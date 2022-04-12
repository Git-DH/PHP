<?php
   $start_num = 1;
   $end_num = 100;

  $result = sum_form_to($start_num, $end_num);// = 은 값이 리턴 된다는 뜻

   function sum_form_to($start_num, $end_num)
   {
        $result = 0;
        for($i=$start_num; $i<=$end_num; $i++)
        {
            $result += $i;
        }
        return $result;// 위의 $result로 리턴값을 보낸다
   }
   
   print "$start_num ~ $end_num 을 모두 더한 값은 $result<br>";
   
?>