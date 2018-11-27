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
        echo "Hyôton";
    } elseif (
        ($chakra1 == "doton" || $chakra1 == "suiton") &&
        ($chakra2 == "suiton" || $chakra2 == "doton")
    ){
        echo "Mokuton";
    } elseif (
        ($chakra1 == "raiton" || $chakra1 == "suiton") &&
        ($chakra2 == "suiton" || $chakra2 == "raiton")
    ){
        echo "Ranton";
    } elseif (
        ($chakra1 == "katon" || $chakra1 == "doton") &&
        ($chakra2 == "doton" || $chakra2 == "katon")
    ){
        echo "Hyôton";
    } elseif (
        ($chakra1 == "katon" || $chakra1 == "suiton") &&
        ($chakra2 == "suiton" || $chakra2 == "katon")
    ){
        echo "Futton";
    } elseif (
        ($chakra1 == "doton" || $chakra1 == "raiton") &&
        ($chakra2 == "raiton" || $chakra2 == "doton")
    ){
        echo "Bakuton";
    } elseif (
        ($chakra1 == "fûton" || $chakra1 == "katon") &&
        ($chakra2 == "katon" || $chakra2 == "fûton")
    ){
        echo "Shakuton";
    } elseif (
        ($chakra1 == "fûton" || $chakra1 == "doton") &&
        ($chakra2 == "doton" || $chakra2 == "fûton")
    ){
        echo "Jiton";
    } elseif (
        ($chakra1 == "fûton" || $chakra1 == "suiton") &&
        ($chakra2 == "suiton" || $chakra2 == "fûton")
    ){
        echo "Hyôton";
    } else {
        echo "Unknown";
    }
}

combineChakra($doton, $futon);
