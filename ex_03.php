<?php

function my_add_to_cookie($key, $value)
{
    $totovalue = $value . "toto";
    setcookie($key, $totovalue);
}
