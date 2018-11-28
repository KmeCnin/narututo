## Jutsu 2

### Mudra 1
Lighten function combineChakra by removing some `||`.
Store the parameter chakra into an array and then search into that array if the wanted values are in it.

See:
- http://php.net/manual/en/function.array.php
 
**Solution:** https://github.com/KmeCnin/narututo/blob/master/jutsu-2/mudra-1.php

### Mudra 2
Directly allow the function combineChakra to receive any number of chakras.

See:
- http://php.net/manual/en/function.array.php

**Solution:** https://github.com/KmeCnin/narututo/blob/master/jutsu-2/mudra-2.php

### Mudra 3
Create a function displayChakras that display all the chakras given as an array.

See:
- http://php.net/manual/fr/control-structures.foreach.php

**Solution:** https://github.com/KmeCnin/narututo/blob/master/jutsu-2/mudra-3.php

### Mudra 4
Modify function displayChakras in order to force all displayed chakras to have all letters in lowercase except the first one in uppercase.

See:
- http://php.net/manual/fr/function.strtolower.php
- https://www.w3schools.com/php/func_string_ucfirst.asp

**Solution:** https://github.com/KmeCnin/narututo/blob/master/jutsu-2/mudra-4.php

### Mudra 5
Create a function packChakras that take 5 different chakras as 5 parameters and return an array that contains all the 5 values.  
The function must also check that the same chakra is not given twice.  

Test it by first storing returned array into a variable and then giving this array to displayChakras.

See:
- http://php.net/manual/en/function.array.php
- http://php.net/manual/en/class.exception.php

**Solution:** https://github.com/KmeCnin/narututo/blob/master/jutsu-2/mudra-5.php

### Mudra 6
Our function combineChakra is only returning us one of the possible combination possible from the list of given chakras.  

Modify it in order to return the known combination of ALL the given chakras.  
It means that if we give 3 chakras, we return the combination of 3 chakras if known or, if we don't know one, we return "Unknown"

See:
- http://php.net/manual/en/function.count.php
- http://php.net/manual/en/function.reset.php

**Solution:** https://github.com/KmeCnin/narututo/blob/master/jutsu-2/mudra-6.php

### Mudra 7
Create a function listAllCombinedChakras that return the list of all chakras possible from a given list of base chakras (including the bases chakras too).  
This function will work the same than combineChakra except that it will return an array of all the matched combination possible.  

Hint: don't use only if instead of elseif.

See:
- http://php.net/manual/en/function.array.php

**Solution:** https://github.com/KmeCnin/narututo/blob/master/jutsu-2/mudra-7.php
