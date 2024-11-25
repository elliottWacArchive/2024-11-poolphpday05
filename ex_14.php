<?php

function display_names(...$args)
{
    $script_name = basename($_SERVER['PHP_SELF']);
    $num_args = count($args);
    $pair = ($num_args % 2 == 0) ? 1 : 0;

    return array(
        0 => $script_name,
        3 => $num_args,
        4 => $pair
    );
}
