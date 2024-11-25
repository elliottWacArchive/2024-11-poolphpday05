<?php

function my_add_to_session($key, $value)
{
    session_start();
    $_SESSION[$key] = $value . "titi";
}
