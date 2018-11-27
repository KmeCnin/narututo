<?php

/*
 * Update function combineChakra in order to allow a third optional parameter that would allow the function to return
 * a new chakra combined from 3 different base chakra type.
 *
 * See:
 * - http://naruto.wikia.com/wiki/Dust_Release
 * - http://php.net/manual/en/functions.arguments.php#functions.arguments.default
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
        echo "Jinton"; // Poussière
    } elseif (
        ($chakra1 == "fûton" || $chakra1 == "suiton") &&
        ($chakra2 == "suiton" || $chakra2 == "fûton")
    ){
        echo "Hyôton"; // Glace
    } elseif (
        ($chakra1 == "doton" || $chakra1 == "suiton") &&
        ($chakra2 == "suiton" || $chakra2 == "doton")
    ){
        echo "Mokuton"; // Bois
    } elseif (
        ($chakra1 == "raiton" || $chakra1 == "suiton") &&
        ($chakra2 == "suiton" || $chakra2 == "raiton")
    ){
        echo "Ranton"; // Orage
    } elseif (
        ($chakra1 == "katon" || $chakra1 == "doton") &&
        ($chakra2 == "doton" || $chakra2 == "katon")
    ){
        echo "Yôton"; // Lave
    } elseif (
        ($chakra1 == "katon" || $chakra1 == "suiton") &&
        ($chakra2 == "suiton" || $chakra2 == "katon")
    ){
        echo "Futton"; // Vapeur
    } elseif (
        ($chakra1 == "doton" || $chakra1 == "raiton") &&
        ($chakra2 == "raiton" || $chakra2 == "doton")
    ){
        echo "Bakuton"; // Explosion
    } elseif (
        ($chakra1 == "fûton" || $chakra1 == "katon") &&
        ($chakra2 == "katon" || $chakra2 == "fûton")
    ){
        echo "Shakuton"; // Châleur
    } elseif (
        ($chakra1 == "fûton" || $chakra1 == "doton") &&
        ($chakra2 == "doton" || $chakra2 == "fûton")
    ){
        echo "Jiton"; // Magnétisme
    } else {
        echo "Unknown";
    }
}

combineChakra($doton, $futon, $katon);
