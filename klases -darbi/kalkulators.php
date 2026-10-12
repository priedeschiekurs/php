<?php
$a = 10;
$b = 3; 
$darbiba = "*";
$ress = 0;

if (darbiba == "*" ) {
        $ress = $a + $b;    
    }elseif ($darbiba == "-" ) {
        $ress = $a-$b;
    } elseif ($darbiba =="*") {
        $ress = $a * $b;
    } elseif ($darbiba == "/") {
        if ($b != 0){
            $ress = $a / $b; 
        } else {
            $ress = "nedrikst dalīt ar nulli";
        }
    } else {
        $ress = "nepareiza darbiba";
}
echo "Rezultāts: " , $ress;

echo "<hr>";



$skaitlis =3;

do { echo "izpildās vismaz vienreiz : $skaitlis <br>";
$skaitlis++;
    } while (skaitlis <5);

    echo "<br>";
    echo "foreach";

    $valodas = [ "PHP", "JavaScript","Python"];

    foreach ($valodas as $valoda) {
        echo "<li> $valoda</li>"; 
        }
    $students =[
    "vārds"=> "Anna",
    "vecums" => 18,
    "pilsēta" => "Jelgava" 
    ];

    print_r(students);
    foreach($students as $atslega => $vertiba) {
    echo "$atslega: $vērtība<br>";}

    echo "hr";
    $skaitli = [1,2,3];
    foreach ($skaitli as &$skaitlis)

{$skaitlis *=2;}
//unset($skaitlis);
print_r(skaitlis);

echo "hr";
echo "akumulatori: skaits, summa,
 vidējais, minimums, maksimums<br>";

//summas akumulators
$atzimes = [7,9,6,10,8];
$summa= 0;
foreach ($atzimes as $atzime)
{$summa += $atzime;}
$videja = $summa / count($atzimes);
echo "Vidējā: $videja"; 
echo "hr";
$atzimes = [3, 7, 4, 9, 2, 6 ];
$nesekmigas = 0;
foreach($atzimes as $atzime){
    if($atzime <4) {
    $nesekmigas++;
    } 
}
echo "nesekmigo skaits: $nesekmigas"";
echo <hr>;


echo "Min un Max<br>";

$temperaturas = [4, -2, 7, 1, -5, 6]

?>