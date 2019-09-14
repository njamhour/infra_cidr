<?php


require('classes/atributos.class.php');
require('includes/header.php');


?>
<hr>
<div class="container">
	<form method="POST" action="calcular.php" id="form" name="form">
		<div class="form-row">

			<div class="form-group col-md-2">
				<label for="input_ip_rede"><b>IP de rede</b></label>
				<input type="text" name="input_ip_rede" id="input_ip_rede" class="form-control" placeholder="192.168.0.0">
			</div>


			<div class="form-group col-md-2">
				<label for="input_host_inicial"><b>Host Inicial</b></label>
				<input type="text" name="input_host_inicial" id="input_host_inicial" class="form-control" placeholder="192.168.0.2">
			</div>


			<div class="form-group col-md-2">
				<label for="input_netmask"><b>Netmask:</b></label>
				<input type="text" name="input_netmask" id="input_netmask" class="form-control" placeholder="255.255.255.0">
			</div>

			<div class="form-group col-md-2">
				<label for="input_qtd_ips"><b>Quantidade IPs</b></label>
				<input type="text" name="input_qtd_ips" id="input_qtd_ips" class="form-control" placeholder="0">
			</div>

			<div class="form-group col-md-2">
				<label for="input_qtd_grupos"><b>Quantidade Grupos</b></label>
				<input type="text" name="input_qtd_grupos" id="input_qtd_grupos" class="form-control" placeholder="0">
			</div>
		</div>


		<div class="form-row">
			<div class="form-group col-md-2">
				<label for="input_broadcast"><b>Broadcast</b></label>
				<input type="text" name="input_broadcast" id="input_broadcast" class="form-control" placeholder="255.255.255.0">
			</div>

			<div class="form-group col-md-2">
				<label for="input_host_final"><b>Host Final</b></label>
				<input type="text" name="input_host_final" id="input_host_final" class="form-control" placeholder="192.168.0.254">
			</div>

			<div class="form-group col-md-2">
				<label for="input_cidr"><b>CIDR</b></label>
				<input type="number" name="input_cidr" id="input_cidr" class="form-control" placeholder="32" min="8" max="30">
			</div>

			<div class="form-group col-md-2">
				<label for="input_qtd_hosts"><b>Quantidade Hosts</b></label>
				<input type="text" name="input_qtd_hosts" id="input_qtd_hosts" class="form-control" placeholder="0">
			</div>

			<div class="form-group col-md-2">
				<label for="input_grupo"><b>Grupo</b></label>
				<input type="text" name="input_grupo" id="input_grupo" class="form-control" placeholder="0">
			</div>


		</div>
		<div class=form-group>
			<button type="submit" class="btn btn-primary">Calcular</button>
		</div>
	</form>
	<h3>Combinações Não Possiveis</h3>
	<p>Ip de Rede + Primeiro Ip</p>
	<p>Ip Final + Broadcast</p>
</div>