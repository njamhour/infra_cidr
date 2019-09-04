<?php

class AtributosIP
{
	public $IP;
	public $CIDR;
	public $NETMASK;
	//private $GRUPOS;

	function __construct($IP, $CIDR, $NETMASK)
	{
		$this->IP = $IP;
		$this->CIDR = $CIDR;
		$this->NETMASK = $NETMASK;
		//$this->RetornarAtributos();
	}

	function RetornarAtributos()
	{
		echo $this->IP . " " . $this->CIDR . " " . $this->NETMASK;
	}
}

?>