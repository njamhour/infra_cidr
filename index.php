<?php


require('classes/atributos.class.php');
require('includes/header.php');

//$Atributo = new AtributosIP('192.168.0.100', '25', '255.255.255.0');


?>
<hr>
<div class="container">
	<form class="form-inline" method="POST" action="/calculo.php">
		<div class="form-group">
			<label for="ip_input">IP:</label>
			<input type="text" name="ip_input" id="ip_input" class="form-control" placeholder="192.168.0.1">
			<label for="cidr_input">CIDR:</label>
			<input type="number" name="cidr_input" id="cidr_input" class="form-control" placeholder="24">
			<label for="netmask_input">NETMASK:</label>
			<input type="text" name="netmask_input" id="netmask_input" class="form-control" placeholder="255.255.255.0">
		</div>
	</form> 
</div>