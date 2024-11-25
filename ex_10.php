<?php

function my_get_weird_info()
{
    $max = $_GET["nbr_elem"];
    if (isset($max)) {
        $i = 0;
        foreach ($_GET as $key => $val) {
            if ($i == $max) {
                return 0;
            }
            echo '$_GET[' . $key . '] = "' . $val . '"' . PHP_EOL;
            $i++;
        }
    }
    return null;
}
