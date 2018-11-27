<?php

/*
 * Create a function combineChakra that takes 2 chakra as parameters and display the combined chakra.
 *
 * See:
 * - http://naruto.wikia.com/wiki/Nature_Transformation
 * - http://php.net/manual/en/functions.user-defined.php
 */

$doton = "doton";
$suiton = "suiton";
$katon = "katon";
$raiton = "raiton";
$futon = "fûton";

function combineChakra($chakra1, $chakra2){
    if (
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

combineChakra($doton, $futon);
