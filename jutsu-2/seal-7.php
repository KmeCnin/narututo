<?php

/*
 * Create a function listAllCombinedChakras that return the list of all chakras possible from
 * a given list of base chakras (including the bases chakras too).
 *
 * This function will work the same than combineChakra except that it will return an array of all the
 * matched combination possible.
 *
 * Hint: don't use only if instead of elseif.
 *
 * See:
 * - http://php.net/manual/en/function.array.php
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
    if (count($chakras) === 3) {
        if (in_array("doton", $chakras) && in_array("fûton", $chakras) && in_array("katon", $chakras)){
            return "Jinton";
        } else {
            return "Unknown";
        }
    } elseif (count($chakras) === 2) {
        if (in_array("fûton", $chakras) && in_array("suiton", $chakras)){
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
    } elseif (count($chakras) === 1) {
        return reset($chakras);
    } {
        return "Unknown";
    }
}

function listAllCombinedChakras($chakras) {
    $chakrasList = $chakras;
    if (in_array("doton", $chakras) && in_array("fûton", $chakras) && in_array("katon", $chakras)){
        $chakrasList[] = "Jinton";
    }
    if (in_array("fûton", $chakras) && in_array("suiton", $chakras)){
        $chakrasList[] = "Hyôton";
    }
    if (in_array("doton", $chakras) && in_array("suiton", $chakras)){
        $chakrasList[] = "Mokuton";
    }
    if (in_array("raiton", $chakras) && in_array("suiton", $chakras)){
        $chakrasList[] = "Ranton";
    }
    if (in_array("katon", $chakras) && in_array("doton", $chakras)){
        $chakrasList[] = "Hyôton";
    }
    if (in_array("katon", $chakras) && in_array("suiton", $chakras)){
        $chakrasList[] = "Futton";
    }
    if (in_array("doton", $chakras) && in_array("raiton", $chakras)){
        $chakrasList[] = "Bakuton";
    }
    if (in_array("fûton", $chakras) && in_array("katon", $chakras)){
        $chakrasList[] = "Shakuton";
    }
    if (in_array("fûton", $chakras) && in_array("doton", $chakras)){
        $chakrasList[] = "Jiton";
    }

    return $chakrasList;
}

listChakras([$doton, $futon, $katon]);
