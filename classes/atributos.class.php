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
		$this->HOST_FINAL = $HOST_FINAL;
		$this->BROADCAST = $BROADCAST;
		//$this->SPLIT_IP = $SPLIT_IP;


		$this->ExplodirIP($IP);
		//$this->ValidarRequisitos($RequisitoUm, $RequisitoDois);
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
	function CalcularNetmask($CIDR)
	{
		switch ($CIDR) {
			case 8:
				$NETMASK = "255.0.0.0";
				return $NETMASK;
				break;

			case 9:
				$NETMASK = "255.128.0.0";
				return $NETMASK;
				break;

			case 10:
				$NETMASK = "255.192.0.0";
				return $NETMASK;
				break;

			case 11:
				$NETMASK = "255.224.0.0";
				return $NETMASK;
				break;

			case 12:
				$NETMASK = "255.240.0.0";
				return $NETMASK;
				break;

			case 13:
				$NETMASK = "255.248.0.0";
				return $NETMASK;
				break;

			case 14:
				$NETMASK = "255.252.0.0";
				return $NETMASK;
				break;

			case 15:
				$NETMASK = "255.254.0.0";
				return $NETMASK;
				break;

			case 16:
				$NETMASK = "255.255.0.0";
				return $NETMASK;
				break;

			case 17:
				$NETMASK = "255.255.128.0";
				return $NETMASK;
				break;

			case 18:
				$NETMASK = "255.255.192.0";
				return $NETMASK;
				break;

			case 19:
				$NETMASK = "255.255.224.0";
				return $NETMASK;
				break;

			case 20:
				$NETMASK = "255.255.240.0";
				return $NETMASK;
				break;

			case 21:
				$NETMASK = "255.255.248.0";
				return $NETMASK;
				break;

			case 22:
				$NETMASK = "255.255.252.0";
				return $NETMASK;
				break;

			case 23:
				$NETMASK = "255.255.254.0";
				return $NETMASK;
				break;

			case 24:
				$NETMASK = "255.255.255.0";
				return $NETMASK;
				break;

			case 25:
				$NETMASK = "255.255.255.128";
				return $NETMASK;
				break;

			case 26:
				$NETMASK = "255.255.255.192";
				return $NETMASK;
				break;

			case 27:
				$NETMASK = "255.255.255.224";
				return $NETMASK;
				break;

			case 28:
				$NETMASK = "255.255.255.240";
				return $NETMASK;
				break;

			case 29:
				$NETMASK = "255.255.255.248";
				return $NETMASK;
				break;

			case 30:
				$NETMASK = "255.255.255.252";
				return $NETMASK;
				break;

			case 31:
				$NETMASK = "255.255.255.254";
				return $NETMASK;
				break;

			case 32:
				$NETMASK = "255.255.255.255";
				return $NETMASK;

			default:
				$NETMASK = "255.0.0.0";
				return $NETMASK;
				break;
		}
	}
	// Função para realizar a conversão do IP para forma binaria, completando com '0'
	// caso não tenha 8 digitos
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
