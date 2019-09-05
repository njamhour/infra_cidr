<?php

class AtributosIP
{
	public $IP;
	public $CIDR;
	public $NETMASK;


	function __construct($IP, $CIDR, $NETMASK)
	{
		$this->IP = $IP;
		$this->CIDR = $CIDR;
		$this->NETMASK = $NETMASK;


		$this->ExplodirIP($IP);
	}

	function RetornarAtributos(): void
	{
		echo $this->IP . " " . $this->CIDR . " " . $this->NETMASK;
	}

	function ExplodirIP($IP)
	{
		$this->SPLIT_IP = preg_split("/\./", $IP);
		return $this->SPLIT_IP;
	}
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
}
