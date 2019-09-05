<?php
function ValidarRequisitos($RequisitoUm, $RequisitoDois)
{
    if (
        isset($RequisitoUm) && !empty($RequisitoUm)
        &&
        isset($RequisitoDois) && !empty($RequisitoDois)
    ) {
        $Instanciar = 1;
    } else {
        $Instanciar = 0;
    }
    switch ($Instanciar) {
        case 0:
            header("Location: index.php");
            break;
        case 1:
            $IP = $RequisitoUm;
            $CIDR = $RequisitoDois;
            $Atributos = new AtributosIP($IP, $CIDR, "", "", "", "");
            return $Atributos;
            //($ip, $cidr, $netmask, $host_inicial, $host_final, $broadcast);
            break;
        default:
            header("Location: www.terra.com.br");
    }
}
