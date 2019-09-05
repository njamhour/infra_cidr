<?php
require('includes/header.php');

$MascaraInicial = "255.0.0.0";
$Split_Mascara = preg_split("/\./", $MascaraInicial);

$VariacaoHost = "1.256.256.256";
$Split_Host = preg_split("/\./", $VariacaoHost);

echo "1 -" . $Split_Mascara[0] . "<br>";
echo "2 -" . $Split_Mascara[1] . "<br>";
echo "3 -" . $Split_Mascara[2] . "<br>";
echo "4 -" . $Split_Mascara[3] . "<br>";

echo $Split_Mascara[0] . "." . $Split_Mascara[1] . "." . $Split_Mascara[2] . "." . $Split_Mascara[3];
echo "<br>";
echo $Split_Host[0] . "." . $Split_Host[1] . "." . $Split_Host[2] . "." . $Split_Host[3];
echo "<br>";

/*while ($Split_Mascara[1] <= 256) {
    $x = 6;
    echo $Split_Mascara[0] . "." . $Split_Mascara[1] . "." . $Split_Mascara[2] . "." . $Split_Mascara[3];
    echo "<br>";
    $Split_Mascara[1] = $Split_Mascara[1] + pow(2, $x);
    $x--;
    echo "<br>";
}*/
echo "<br>";
$p = 255;
$a = 0;
$b = 0;
$c = 0;
$CidrA = 8;
$CidrB = 17;
$CidrC = 25;
for ($y = 9; $y != 0; $y--) {
    echo $p . "." . $a . "." . $b . "." . $c . " - Classe A - /" . $CidrA;
    $a = $a + pow(2, $y-2);
    echo "</br>";
    $CidrA++;

}
if ($a = 255) {
    for ($z = 9; $z >= 0; $z--) {
        echo $p . "." . $a . "." . $b . "." . $c . " - Classe B - /" . $CidrB;
        $b = $b + pow(2, $z-2);

        echo "</br>";
        $CidrB++;
    }
}
if ($b = 255)
{
    for ($t = 9; $t >= 0; $t--){
        $c = $c + pow(2, $t-2);
        echo $p . "." . $a . "." . $b . "." . $c . " - Classe C - /" . $CidrC;
        echo "<br>";
        $CidrC++;
    }
}
