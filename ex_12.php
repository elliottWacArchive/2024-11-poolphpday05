<?php

function calculerTempsExecution()
{
    $start = microtime(true);
    $time = $start - $_SERVER['REQUEST_TIME_FLOAT'];
    return number_format($time, 7, '.', '');
}
