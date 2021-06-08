<?php
    $f = './test';
    $b = file_get_contents($f);
    $a = $b+1;
    file_put_contents($f,$a);
    echo "浏览量:".$b;
    // echo file_put_contents($f);