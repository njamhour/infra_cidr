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
			<input type="text" name="ip_input" id="ip_input" class="form-control" placeholder="192.168.0.1">
		</div>
		<div class="form group col-md-5">
			<label for="netmask_input"><b>NETMASK:</b></label>
			<input type="text" name="netmask_input" id="netmask_input" class="form-control" placeholder="255.255.255.0">
		</div>
		<div class="form group col-md-2">
			<label for="cidr_input"><b>CIDR:</b></label>
			<input type="number" name="cidr_input" id="cidr_input" class="form-control" placeholder="24">
		</div>
	</div>
	<div class=form-group>
		<button type="submit" class="btn btn-primary">Enviar</button>
	</div>
	</form> 
</div>