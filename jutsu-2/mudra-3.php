<?php

/*
 * Create a function displayChakras that display all the chakras given as an array.
 *
 * See:
 * - http://php.net/manual/fr/control-structures.foreach.php
 */

$doton = "doton";
$suiton = "suiton";
$katon = "katon";
$raiton = "raiton";
$futon = "fûton";

function displayChakras($chakras) {
    foreach ($chakras as $chakra) {
        echo "$chakra\n";
    }
}

displayChakras([$doton, $suiton, $katon, $raiton, $futon]);

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
