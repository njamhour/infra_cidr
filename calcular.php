<?php

require('classes/atributos.class.php');
require('includes/header.php');

$Atributos = new AtributosIP($_POST['ip_input'], $_POST['cidr_input'], $_POST['netmask_input']);

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
			<td><?php echo $Atributos->NETMASK ?></td>
		</tr>
	</table>
	</div>