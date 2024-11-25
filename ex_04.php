<?php

function my_print_cookie($key)
{
    if ($_COOKIE[$key]) {
        echo $_COOKIE[$key] . "_END\n";
    };
}
