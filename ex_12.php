<?php

function get_execution_time()
{
    $start = microtime(true);
    $time = $start - $_SERVER['REQUEST_TIME_FLOAT'];
    return number_format($time, 7, '.', '');
}
