<?php

<hr>

echo
"1. uzd.  
Uz ekrāna izdrukāt tekstu “Rezultāts: ”
 un reizinājumu 11 * 15."

$rezultats = 11 * 15;
echo Rezultāts: $rezultats;

//kom. rezultāts: 165//

<hr>
echo "Definēt divus mainīgos,
 kuriem piešķirt vērtības 5 un 7.
 Pēc tam izdrukāt abu mainīgo summu."

$a = 5;
$b = 7;

 $summa = $a + $b; 
echo = $summa;
//kom. rez. 12//
<hr>
echo "3. uzd. 
Ar vienu komandu izdrukāt 
abu iepriekšējā uzdevuma mainīgo vērtības
 un starp vērtībām ievietot tekstu “ vai ”."


 <hr>
echo "6.Uzdevums<br>";
for ($i = 0; $i >= -50; $i-=2){
    echo $i. " ";
}
echo "<hr>";
for ($i = 0; $i>=-50; $i--) {
    if($i%2 !== 0) {
        continue;
    }
    echo "$i "; 
}
?>