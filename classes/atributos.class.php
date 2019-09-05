<?php

class AtributosIP
{
	public $IP;
	public $CIDR;
	public $NETMASK;
	public $HOST_INICIAL;
	public $HOST_FINAL;
	public $BROADCAST;
	public $SPLIT_IP;


	function __construct($IP, $CIDR, $NETMASK, $HOST_INICIAL, $HOST_FINAL, $BROADCAST)
	{
		$this->IP = $IP;
		$this->CIDR = $CIDR;
		$this->NETMASK = $NETMASK;
		$this->HOST_INICIAL = $HOST_INICIAL;
		$this->HOST_INICIAL = $HOST_INICIAL;
		$this->BROADCAST = $BROADCAST;
		//$this->SPLIT_IP = $SPLIT_IP;


		$this->ExplodirIP($IP);
	}

	// Função para DEBUG
	function RetornarAtributos(): void
	{
		echo $this->IP . " " . $this->CIDR . " " . $this->NETMASK;
	}

	// "Explode" o IP utilizando como separador o '.', trazendo 4 numeros separados
	function ExplodirIP($IP)
	{
		$this->SPLIT_IP = preg_split("/\./", $IP);
		return $this->SPLIT_IP;
	}

	// Realizar o calculo da mascara de rede de acordo com o CIDR
	function CalcularNetmask($CIDR): string
	{
		if ($this->CIDR == 24) {
			$this->NETMASK = "255.255.255.0";
			return $this->NETMASK;
		} else {
			$this->NETMASK = "UKNOWN";
			return "$this->NETMASK";
		}
	}
	// Função para realizar a conversão do IP para forma binaria
	function RetornarOctetoBinario($octeto)
	{
		$ValorBinario = decbin($this->SPLIT_IP[$octeto]);
		if (strlen($ValorBinario) < 8) {
			while (strlen($ValorBinario) < 8) {
				$ValorBinario = "0" . $ValorBinario;
			}
		}
		echo $ValorBinario;
	}

	// Função para retornar octeto decimal
	function RetornarOcteto($octeto)
	{
		echo $this->SPLIT_IP[$octeto];
	}
}
