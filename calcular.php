<?php

require('classes/atributos.class.php');
require('includes/header.php');

$Atributos = new AtributosIP($_POST['ip_input'], $_POST['cidr_input'], $_POST['netmask_input']);
//print_r($Atributos->ExplodirIP('255.255.255.0')[0]);
//$Atributos->ExplodirIP($IP);
?>

<div class="container">
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
			<th>Quantiade de Grupos</th>
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
	</table>
</div>