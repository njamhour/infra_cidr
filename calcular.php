<?php

require('classes/atributos.class.php');
require('includes/header.php');


//$Atributos = new AtributosIP("", "", "", "", "", "");

//ValidarRequisitos($_POST['ip_input'], $_POST['cidr_input']);
//ValidarRequisitos("192.168.20.20", 24);
// Requisitos necessários para realizar os calculos

// Primeiro requisito, IP e CIDR
if (
	isset($_POST['ip_input']) && !empty($_POST['ip_input'])
	&&
	isset($_POST['cidr_input']) && !empty($_POST['cidr_input'])
) {
	$IP = $_POST['ip_input'];
	$CIDR = $_POST['cidr_input'];
	$netmask = "";
	$host_inicial = "";
	$host_final = "";
	$broadcast = "";

	$Atributos = new AtributosIP(
		$IP,
		$CIDR,
		$netmask,
		$host_inicial,
		$host_final,
		$broadcast
	);
} else {
	echo "Ocorreu algum erro";
}

?>

<div class="container">

	<h4>Informações Gerais</h4>
	<table class="table table-hover table-bordered table-stripped">
		<tr>
			<th>Endereço IP</th>
			<th>CIDR</th>
			<th>NETMASK</th>
		</tr>

		<tr>
			<td><?php echo $Atributos->IP ?></td>
			<td><?php echo $Atributos->CIDR ?></td>
			<td><?php echo $Atributos->CalcularNetmask($CIDR) ?></td>
		</tr>
	</table>

	<hr>

	<h4>Informações Adicionais</h4>
	<table class="table table-hover table-bordered table-stripped">
		<tr>
			<th>IP Inicial</th>
			<th>IP Final</th>
			<th>Quantidade de Grupos</th>
		</tr>

		<tr>
			<td></td>
			<td></td>
			<td></td>
		</tr>
	</table>

	<hr>

	<h4>Distribuição Binária por Octetos</h4>
	<table class="table table-hover table-bordered table-stripped">
		<tr>
			<th>Primeiro Octeto</th>
			<th>Segundo Octeto</th>
			<th>Terceiro Octeto</th>
			<th>Quarto Octeto</th>
		</tr>

		<tr>
			<td><?php $Atributos->RetornarOctetoBinario(0); ?></td>
			<td><?php $Atributos->RetornarOctetoBinario(1); ?></td>
			<td><?php $Atributos->RetornarOctetoBinario(2); ?></td>
			<td><?php $Atributos->RetornarOctetoBinario(3); ?></td>
		</tr>

		<tr>
			<td><?php $Atributos->RetornarOcteto(0); ?></td>
			<td><?php $Atributos->RetornarOcteto(1); ?></td>
			<td><?php $Atributos->RetornarOcteto(2); ?></td>
			<td><?php $Atributos->RetornarOcteto(3); ?></td>
		</tr>
	</table>
</div>