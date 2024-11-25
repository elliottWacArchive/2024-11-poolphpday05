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

$_GET['nbr_elem'] = 5;
$_GET["var1"] = "premier test";
$_GET["var2"] = "deuxieme test";
$_GET["var3"] = "dernier test";
$_GET["directrice"] = "Sophie";
$_GET["responsable"] = "Julien";
$_GET["pangolin1"] = "Samy";
$_GET["pangolin2"] = "Henri";

echo my_get_weird_info();