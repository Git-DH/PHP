<?php
    setcookie("country", "korea");
    if($_COOKIE['country'])
    {
        echo "country : ", $_COOKIE['country'], "<br>";
    }
?>
<a href="cookie2.php">Next Page</a>