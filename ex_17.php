<?php

function check_url($whiteList)
{
    if (!isset($_GET['token'])) {
        return false;
    }
    $token = $_GET['token'];
    if (!is_string($token)) {
        return -1;
    }
    for ($i = 0; $i < strlen($token); $i++) {
        if (!in_array($token[$i], $whiteList)) {
            return -1;
        }
    }
    return 1;
}
