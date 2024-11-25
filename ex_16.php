<?php

function check_types($bigarr)
{
    foreach ($bigarr as $key => $arr) {
        foreach ($arr as $val) {
            if (gettype($val) != $key) {
                return false;
            }
        }
    }
    return true;
}
