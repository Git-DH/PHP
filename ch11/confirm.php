<?php
/* 
session_destroy에서 세션이 사라져서 링크를 이용해서 진입하면 
세션이 없어 아무것도 뜨지 않는다
*/
    session_start();
    echo $_SESSION['var1'], "<br>";
    echo $_SESSION['var2'], "<br>";