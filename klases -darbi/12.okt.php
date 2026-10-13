<?php
$atzimes = [8, 3, 7, 10, 4, 2, 9, 6];
$summa = 0;
$sekmigas = 0;
$nesekmigas = 0;
$max = $atzimes[0];

foreach ($atzimes as $atzime) {
    if ($atzime < 1 || $atzime > 10) {
        continue;
    }

    $summa += $atzime;

    if ($atzime >= 4) {
        $sekmigas++;
    } else {
        $nesekmigas++;
    }

    if ($atzime > $max) {
        $max = $atzime;
    }
}

$derigoSkaits = $sekmigas + $nesekmigas;
$videja = $derigoSkaits > 0 ? $summa / $derigoSkaits : null;

echo "Sekmīgas: $sekmigas<br>";
echo "Nesekmīgas: $nesekmigas<br>";
echo "Maksimālā: $max<br>";
echo "Vidējā: " . ($videja === null ? "nav datu" : round($videja, 2));