<?php

/*
 * Create a function packChakras that take 5 different chakras as 5 parameters and return an array
 * that contains all the 5 values.
 * The function must also check that the same chakra is not given twice.
 *
 * Test it by first storing returned array into a variable and then giving this array to displayChakras.
 *
 * See:
 * - http://php.net/manual/en/function.array.php
 * - http://php.net/manual/en/class.exception.php
 */

$doton = "doton";
$suiton = "suiton";
$katon = "katon";
$raiton = "raiton";
$futon = "fûton";

function packChakras($chakra1, $chakra2, $chakra3, $chakra4, $chakra5) {
    $chakras = [$chakra1, $chakra2, $chakra3, $chakra4, $chakra5];
    $uniqueChakras = [];
    foreach ($chakras as $chakra) {
        if (!in_array($chakra, $uniqueChakras)) {
            $uniqueChakras[] = $chakra;
        } else {
            throw new \Exception();
        }
    }

    return $uniqueChakras;
}

displayChakras(packChakras($doton, $suiton, $katon, $raiton, $futon));
displayChakras(packChakras($doton, $doton, $doton, $doton, $doton));

function displayChakras($chakras) {
    foreach ($chakras as $chakra) {
        $lcChakra = strtolower($chakra);
        $ucChakra = ucfirst($lcChakra);
        echo "$ucChakra\n";
    }
}

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
