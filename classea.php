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
for ($y = 7; $y != 0; $y--) {
    $a = $a + pow(2, $y);
    echo $p . "." . $a . "." . $b . "." . $c;
    echo "</br>";
}
if ($a = 255) {
    for ($z = 7; $z >= 0; $z--) {
        $b = $b + pow(2, $z);
        echo $p . "." . $a . "." . $b . "." . $c;
        echo "</br>";
    }
}
