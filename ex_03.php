<?php

function my_add_to_cookie($key, $value)
{
    $totovalue = $value . "toto";
    $_COOKIE[$key] = $totovalue;
}
