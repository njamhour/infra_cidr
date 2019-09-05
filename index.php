<?php


require('classes/atributos.class.php');
require('includes/header.php');

//$Atributo = new AtributosIP('192.168.0.100', '25', '255.255.255.0');


?>
<hr>
<div class="container">
	<form method="POST" action="calcular.php">
	<div class="form-row">
		<div class="form group col-md-5">
			<label for="ip_input"><b>Endereço IP</b></label>
			<input type="text" name="ip_input" id="ip_input" class="form-control" placeholder="192.168.0.10">
		</div>
		<div class="form group col-md-5">
			<label for="netmask_input"><b>Netmask:</b></label>
			<input type="text" name="netmask_input" id="netmask_input" class="form-control" placeholder="255.255.255.0">
		</div>
		<div class="form group col-md-2">
			<label for="cidr_input"><b>CIDR:</b></label>
			<input type="number" name="cidr_input" id="cidr_input" class="form-control" placeholder="24">
		</div>
	</div>
	<div class="form-row">
		<div class="form group col-md-4">
			<label for="ip_input"><b>Host Inicial:</b></label>
			<input type="text" name="host_inicial_input" id="ip_input" class="form-control" placeholder="192.168.0.2">
		</div>
		<div class="form group col-md-4">
			<label for="netmask_input"><b>Host Final:</b></label>
			<input type="text" name="host_final_input" id="netmask_input" class="form-control" placeholder="192.168.0.254">
		</div>
		<div class="form group col-md-4">
			<label for="cidr_input"><b>Broadcast</b></label>
			<input type="number" name="broadcast_input" id="cidr_input" class="form-control" placeholder="192.168.0.255">
		</div>
	</div>
	<div class=form-group>
		<button type="submit" class="btn btn-primary">Calcular</button>
	</div>
	</form> 
</div>