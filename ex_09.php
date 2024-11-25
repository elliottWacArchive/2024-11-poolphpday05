<?php

function post_levenshtein_score()
{
    $str_one = $_POST["str_one"];
    $str_two = $_POST["str_two"];
    if (issets($str_one, $str_two)) {
        return levenshtein($str_one, $str_two);
    }
    return null;
}
