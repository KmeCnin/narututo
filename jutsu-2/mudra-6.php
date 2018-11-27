<?php

/*
 * Our function combineChakra is only returning us one of the possible combination possible from
 * the list of given chakras.
 *
 * Modify it in order to return the known combination of ALL the given chakras.
 * It means that if we give 3 chakras, we return the combination of 3 chakras if known or, if
 * we don't know one, we return "Unknown"
 *
 * See:
 * - http://php.net/manual/en/function.count.php
 * - http://php.net/manual/en/function.reset.php
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

combineChakra([$doton, $futon]);
