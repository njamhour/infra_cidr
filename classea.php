<?php
require('includes/header.php');

$MascaraInicial = "255.0.0.0";
$Split_Mascara = preg_split("/\./", $MascaraInicial);

/*echo "1 -" . $Split_Mascara[0] . "<br>";
echo "2 -" . $Split_Mascara[1] . "<br>";
echo "3 -" . $Split_Mascara[2] . "<br>";
echo "4 -" . $Split_Mascara[3] . "<br>";*/
$CidrA = 8;
$CidrB = 16;
$CidrC = 24;

for ($y = 9; $y != 1; $y--) {
    echo $Split_Mascara[0] . "." . $Split_Mascara[1] . "." . $Split_Mascara[2] . "." . $Split_Mascara[3] . " - Classe A - /" . $CidrA;
    $Split_Mascara[1] = $Split_Mascara[1] + pow(2, $y - 2);
    echo "</br>";
    $CidrA++;
}

echo "<hr>";
if ($a = 255) {
    for ($z = 9; $z != 1; $z--) {
        echo $Split_Mascara[0] . "." . $Split_Mascara[1] . "." . $Split_Mascara[2] . "." . $Split_Mascara[3] . " - Classe B - /" . $CidrB;
        $Split_Mascara[2] = $Split_Mascara[2] + pow(2, $z - 2);
        echo "</br>";
        $CidrB++;
    }
}
echo "<hr>";
if ($b = 255) {
    for ($t = 9; $t != 1; $t--) {
        echo $Split_Mascara[0] . "." . $Split_Mascara[1] . "." . $Split_Mascara[2] . "." . $Split_Mascara[3] . " - Classe C - /" . $CidrC;
        $Split_Mascara[3] = $Split_Mascara[3] + pow(2, $t - 2);
        echo "<br>";
        $CidrC++;
    }
}
if ($c = 255) {
    echo $Split_Mascara[0] . "." . $Split_Mascara[1] . "." . $Split_Mascara[2] . "." . $Split_Mascara[3] . " - Classe C - /" . $CidrC;
}
echo "<br>";
?>
<a href="http://www.netadm.com.br/tabela-cidr/">Tabela Cidr</a>