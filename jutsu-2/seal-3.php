<?php

/*
 * Let's lighten even more the combineChakra function.
 * Create a function hasChakras that takes 2 parameters:
 * - an array that contains multiple chakras we want to find
 * - an array that contains all the chakras to search into
 * The function will return true if all requested chakras are found or false otherwise.
 * Then replace all the in_array checks from combineChakra by the new function hasChakras.
 *
 * See:
 * - http://php.net/manual/en/function.array.php
 */

$doton = "doton";
$suiton = "suiton";
$katon = "katon";
$raiton = "raiton";
$futon = "fûton";

function hasChakras($requestedChakras, $allChakras) {
    foreach ($requestedChakras as $requestedChakra) {
        if (!in_array($requestedChakra, $allChakras)) {
            return false;
        }
    }

    return true;
}

function combineChakra($chakras){
    if (hasChakras(["doton", "fûton", "katon"], $chakras)){
        return "Jinton";
    } elseif (hasChakras(["fûton", "suiton"], $chakras)){
        return "Hyôton";
    } elseif (hasChakras(["doton", "suiton"], $chakras)){
        return "Mokuton";
    } elseif (hasChakras(["raiton", "suiton"], $chakras)){
        return "Ranton";
    } elseif (hasChakras(["katon", "doton"], $chakras)){
        return "Hyôton";
    } elseif (hasChakras(["katon", "suiton"], $chakras)){
        return "Futton";
    } elseif (hasChakras(["doton", "raiton"], $chakras)){
        return "Bakuton";
    } elseif (hasChakras(["fûton", "katon"], $chakras)){
        return "Shakuton";
    } elseif (hasChakras(["fûton", "doton"], $chakras)){
        return "Jiton";
    } elseif (hasChakras(["fûton", "suiton"], $chakras)){
        return "Hyôton";
    } else {
        return "Unknown";
    }
}

$combinedChakra = combineChakra([$doton, $futon, $katon]);
echo $combinedChakra;
