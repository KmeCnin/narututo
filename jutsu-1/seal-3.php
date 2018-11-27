<?php

/*
 * Update function combineChakra in order to return the combined chakra instead of displaying it.
 * And store the returned value into a variable and then display it.
 *
 * See:
 * - http://php.net/manual/en/functions.returning-values.php
 */

$doton = "doton";
$suiton = "suiton";
$katon = "katon";
$raiton = "raiton";
$futon = "fûton";

function combineChakra($chakra1, $chakra2, $chakra3 = null){
    if (
        ($chakra1 == "doton" || $chakra1 == "fûton" || $chakra1 == "katon") &&
        ($chakra2 == "doton" || $chakra2 == "fûton" || $chakra2 == "katon") &&
        ($chakra3 == "doton" || $chakra3 == "fûton" || $chakra3 == "katon")
    ){
        return "Jinton";
    } elseif (
        ($chakra1 == "fûton" || $chakra1 == "suiton") &&
        ($chakra2 == "suiton" || $chakra2 == "fûton")
    ){
        return "Hyôton";
    } elseif (
        ($chakra1 == "doton" || $chakra1 == "suiton") &&
        ($chakra2 == "suiton" || $chakra2 == "doton")
    ){
        return "Mokuton";
    } elseif (
        ($chakra1 == "raiton" || $chakra1 == "suiton") &&
        ($chakra2 == "suiton" || $chakra2 == "raiton")
    ){
        return "Ranton";
    } elseif (
        ($chakra1 == "katon" || $chakra1 == "doton") &&
        ($chakra2 == "doton" || $chakra2 == "katon")
    ){
        return "Hyôton";
    } elseif (
        ($chakra1 == "katon" || $chakra1 == "suiton") &&
        ($chakra2 == "suiton" || $chakra2 == "katon")
    ){
        return "Futton";
    } elseif (
        ($chakra1 == "doton" || $chakra1 == "raiton") &&
        ($chakra2 == "raiton" || $chakra2 == "doton")
    ){
        return "Bakuton";
    } elseif (
        ($chakra1 == "fûton" || $chakra1 == "katon") &&
        ($chakra2 == "katon" || $chakra2 == "fûton")
    ){
        return "Shakuton";
    } elseif (
        ($chakra1 == "fûton" || $chakra1 == "doton") &&
        ($chakra2 == "doton" || $chakra2 == "fûton")
    ){
        return "Jiton";
    } elseif (
        ($chakra1 == "fûton" || $chakra1 == "suiton") &&
        ($chakra2 == "suiton" || $chakra2 == "fûton")
    ){
        return "Hyôton";
    } else {
        return "Unknown";
    }
}

$combinedChakra = combineChakra($doton, $futon, $katon);
echo $combinedChakra;
