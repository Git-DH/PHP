<?php
    session_start();
    session_regenerate_id(true);
    // 브라우저 재실행 없이 세션값을 바꿀 수 있다.
    echo "Session ID : ", session_id();
    //브라우저 재실행 하면 바뀜