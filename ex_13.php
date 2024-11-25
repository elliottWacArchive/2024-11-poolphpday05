<?php

function my_sort_files(&$arr)
{
    sort($arr);
    foreach ($arr as $val) {
        echo $val . PHP_EOL;
    }
}
