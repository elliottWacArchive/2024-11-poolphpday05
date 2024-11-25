<?php

function my_add_session($key, $value)
{
    $_SESSION[$key] = $value . "titi";
}
