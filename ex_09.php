<?php

function post_levenshtein_score()
{
    $str_one = $_POST["str_one"];
    $str_two = $_POST["str_two"];
    if ($str_one && $str_two) {
        if (gettype($str_one) != "array") {
            return levenshtein($str_one, $str_two);
        }
    }
    return null;
}
