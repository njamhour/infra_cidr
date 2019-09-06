<?php

require('classes/atributos.class.php');
require('includes/header.php');

$ip_rede = $_POST['input_ip_rede'];
$host_inicial = $_POST['input_host_inicial'];
$netmask = $_POST['input_netmask'];
$qtd_ips = $_POST['input_qtd_ips'];
$qtd_grupos = $_POST['input_qtd_grupos'];
$broadcast = $_POST['input_broadcast'];
$host_final = $_POST['input_host_final'];
$cidr = $_POST['input_cidr'];
$qtd_hosts = $_POST['input_qtd_hosts'];
$grupo = $_POST['input_grupo'];

// Requisitos necessários para realizar os calculos
// Primeiro requisito, IP e CIDR
if (
	isset($ip_rede) && !empty($ip_rede)
	&&
	isset($cidr) && !empty($cidr)
){

	$Atributos = new AtributosIP(
		$ip_rede,
		$host_inicial,
		$netmask,
		$qtd_ips,
		$qtd_grupos,
		$broadcast,
		$host_final,
		$cidr,
		$qtd_hosts,
		$grupo
	);
} else {
	echo "Ocorreu algum erro";
}

?>

<div class="container">

	<h4>Informações Gerais</h4>
	<table class="table table-hover table-bordered table-stripped">
		<tr>
			<th>IP de Rede</th>
			<th>Host Inicial</th>
			<th>Netmask</th>
			<th>Quantidade IPs</th>
			<th>Quantidade Grupos</th>
		</tr>

		<tr>
			<td><?php echo $Atributos->ip_rede ?></td>
			<td><?php echo $Atributos->host_inicial ?></td>
			<td><?php echo $Atributos->CalcularNetmask($cidr) ?></td>
			<td><?php echo $Atributos->qtd_ips ?></td>
			<td><?php echo $Atributos->ip_rede ?></td>
		</tr>
		</table>
		<table class="table table-hover table-bordered table-stripped">

		<tr>
			<th>Broadcast</th>
			<th>Host Final</th>
			<th>CIDR</th>
			<th>Quantidade Hosts</th>
			<th>Grupo</th>
		</tr>

		<tr>
			<td><?php echo $Atributos->broadcast ?></td>
			<td><?php echo $Atributos->host_final ?></td>
			<td><?php echo $Atributos->cidr ?></td>
			<td><?php echo $Atributos->qtd_hosts ?></td>
			<td><?php echo $Atributos->grupo ?></td>
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