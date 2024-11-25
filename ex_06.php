<?php

function my_print_session($key)
{
    session_start();
    if ($_SESSION[$key]) {
        echo $_SESSION[$key] . "\n\n";
    }
}
