<?php

function get_execution_time()
{
    $first = $_SERVER['REQUEST_TIME_FLOAT'];
    $end = $_SERVER['REQUEST_TIME_FLOAT'];
    echo $end - $first;
}

get_execution_time();