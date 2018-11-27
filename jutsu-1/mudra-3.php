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
        return "Jinton"; // Poussière
    } elseif (
        ($chakra1 == "fûton" || $chakra1 == "suiton") &&
        ($chakra2 == "suiton" || $chakra2 == "fûton")
    ){
        return "Hyôton"; // Glace
    } elseif (
        ($chakra1 == "doton" || $chakra1 == "suiton") &&
        ($chakra2 == "suiton" || $chakra2 == "doton")
    ){
        return "Mokuton"; // Bois
    } elseif (
        ($chakra1 == "raiton" || $chakra1 == "suiton") &&
        ($chakra2 == "suiton" || $chakra2 == "raiton")
    ){
        return "Ranton"; // Orage
    } elseif (
        ($chakra1 == "katon" || $chakra1 == "doton") &&
        ($chakra2 == "doton" || $chakra2 == "katon")
    ){
        return "Yôton"; // Lave
    } elseif (
        ($chakra1 == "katon" || $chakra1 == "suiton") &&
        ($chakra2 == "suiton" || $chakra2 == "katon")
    ){
        return "Futton"; // Vapeur
    } elseif (
        ($chakra1 == "doton" || $chakra1 == "raiton") &&
        ($chakra2 == "raiton" || $chakra2 == "doton")
    ){
        return "Bakuton"; // Explosion
    } elseif (
        ($chakra1 == "fûton" || $chakra1 == "katon") &&
        ($chakra2 == "katon" || $chakra2 == "fûton")
    ){
        return "Shakuton"; // Châleur
    } elseif (
        ($chakra1 == "fûton" || $chakra1 == "doton") &&
        ($chakra2 == "doton" || $chakra2 == "fûton")
    ){
        return "Jiton"; // Magnétisme
    } else {
        return "Unknown";
    }
}

$combinedChakra = combineChakra($doton, $futon, $katon);
echo $combinedChakra;
