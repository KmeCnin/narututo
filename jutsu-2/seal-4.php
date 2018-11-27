<?php

/*
 * Modify function displayChakras in order to force all displayed chakras to have all letters in
 * lowercase except the first one in uppercase.
 *
 * See:
 * - http://php.net/manual/fr/function.strtolower.php
 * - https://www.w3schools.com/php/func_string_ucfirst.asp
 */

$doton = "doton";
$suiton = "suiton";
$katon = "katon";
$raiton = "raiton";
$futon = "fûton";

function displayChakras($chakras) {
    foreach ($chakras as $chakra) {
        $lcChakra = strtolower($chakra);
        $ucChakra = ucfirst($lcChakra);
        echo "$ucChakra\n";
    }
}

displayChakras([$doton, $suiton, $katon, $raiton, $futon, "anotherChakra"]);

function combineChakra($chakras){
    if (in_array("doton", $chakras) && in_array("fûton", $chakras) && in_array("katon", $chakras)){
        return "Jinton";
    } elseif (in_array("fûton", $chakras) && in_array("suiton", $chakras)){
        return "Hyôton";
    } elseif (in_array("doton", $chakras) && in_array("suiton", $chakras)){
        return "Mokuton";
    } elseif (in_array("raiton", $chakras) && in_array("suiton", $chakras)){
        return "Ranton";
    } elseif (in_array("katon", $chakras) && in_array("doton", $chakras)){
        return "Hyôton";
    } elseif (in_array("katon", $chakras) && in_array("suiton", $chakras)){
        return "Futton";
    } elseif (in_array("doton", $chakras) && in_array("raiton", $chakras)){
        return "Bakuton";
    } elseif (in_array("fûton", $chakras) && in_array("katon", $chakras)){
        return "Shakuton";
    } elseif (in_array("fûton", $chakras) && in_array("doton", $chakras)){
        return "Jiton";
    } else {
        return "Unknown";
    }
}
