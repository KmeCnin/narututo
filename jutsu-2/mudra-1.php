<?php

/*
 * Lighten function combineChakra by removing some ||.
 * Store the parameter chakra into an array and then search into that array if the wanted values are in it.
 *
 * See:
 * - http://php.net/manual/en/function.array.php
 */

$doton = "doton";
$suiton = "suiton";
$katon = "katon";
$raiton = "raiton";
$futon = "fûton";

function combineChakra($chakra1, $chakra2, $chakra3 = null){
    $chakras = [$chakra1, $chakra2, $chakra3];
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

$combinedChakra = combineChakra($doton, $futon, $katon);
echo $combinedChakra;
