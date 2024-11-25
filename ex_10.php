<?php

function my_get_weird_info()
{
    if (isset($_GET["nbr_elem"])) {
        $max = $_GET["nbr_elem"];
        $i = 0;
        foreach ($_GET as $key => $val) {
            if ($i == $max) {
                return 0;
            }
            echo '$_GET[\'' . $key . '\'] = ' . $val . PHP_EOL;
            $i++;
        }
    }
    return null;
}
