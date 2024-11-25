<?php

function print_array_with_key($my_array)
{
    foreach ($my_array as $k => $v) {
        echo "$k : $v\n";
    }
}
