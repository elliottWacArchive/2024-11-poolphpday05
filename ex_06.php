<?php

function my_print_session($key)
{
    if ($_SESSION[$key]) {
        echo $_SESSION[$key] . "\n\n";
    }
}
