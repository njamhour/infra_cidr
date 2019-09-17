<?php

class AtributosIP
{
	public $ip_rede;
	public $host_inicial;
	public $netmask;
	public $qtd_ips;
	public $qtd_grupos;
	public $broadcast;
	public $host_final;
	public $cidr;
	public $qtd_hosts;
	public $grupo;


	function __construct(
		$ip_rede,
		$host_inicial,
		$netmask,
		$qtd_ips,
		$qtd_grupos,
		$broadcast,
		$host_final,
		$cidr,
		$qtd_hosts,
		$grupo
	) {

		$this->ip_rede = $ip_rede;
		$this->host_inicial = $host_inicial;
		$this->netmask = $netmask;
		$this->qtd_ips = $qtd_ips;
		$this->qtd_grupos = $qtd_grupos;
		$this->broadcast = $broadcast;
		$this->host_final = $host_final;
		$this->cidr = $cidr;
		$this->qtd_hosts = $qtd_hosts;
		$this->grupo = $grupo;



		$this->ExplodirIP($ip_rede);
		//$this->ValidarRequisitos($RequisitoUm, $RequisitoDois);
	}

	// Função para DEBUG
	function RetornarAtributos()
	{
		echo $this->ip_rede . " " . $this->cidr . " " . $this->netmask;
	}

	// "Explode" o IP utilizando como separador o '.', trazendo 4 numeros separados
	function ExplodirIP($ip_rede)
	{
		$this->split_ip = preg_split("/\./", $ip_rede);
		return $this->split_ip;
	}

	// Realizar o calculo da mascara de rede de acordo com o CIDR
	function CalcularNetmask($cidr)
	{
		$Netmask_A = "255.0.0.0";
		$Netmask_B = "255.255.0.0";
		$Netmask_C = "255.255.255.0";
		$Cidr_Inicial_A = 8;
		$Cidr_Inicial_B = 16;
		$Cidr_Inicial_C = 24;
		$ExplodirA = preg_split("/\./", $Netmask_A);
		$ExplodirB = preg_split("/\./", $Netmask_B);
		$ExplodirC = preg_split("/\./", $Netmask_C);
		$i = 9;

		if ($cidr >= 8 && $cidr <= 15) {
			while ($Cidr_Inicial_A != $cidr) {
				$ExplodirA[1] = $ExplodirA[1] + pow(2, $i - 2);
				$Netmask_A = $ExplodirA[0] . "." . $ExplodirA[1] . "." . $ExplodirA[2] . "." . $ExplodirA[3];
				$Cidr_Inicial_A++;
				$i--;
				$Netmask = $Netmask_A;
			}
			return $Netmask_A;
		}

		if ($cidr >= 16 && $cidr <= 23) {
			while ($Cidr_Inicial_B != $cidr) {
				$ExplodirB[2] = $ExplodirB[2] + pow(2, $i - 2);
				$Netmask_B = $ExplodirB[0] . "." . $ExplodirB[1] . "." . $ExplodirB[2] . "." . $ExplodirB[3];
				$Cidr_Inicial_B++;
				$i--;
				$Netmask = $Netmask_B;
			}
			return $Netmask_B;
		}

		if ($cidr >= 24 && $cidr <= 32) {
			while ($Cidr_Inicial_C != $cidr) {
				$ExplodirC[3] = $ExplodirC[3] + pow(2, $i - 2);
				$Netmask_C = $ExplodirC[0] . "." . $ExplodirC[1] . "." . $ExplodirC[2] . "." . $ExplodirC[3];
				$Cidr_Inicial_C++;
				$i--;
				$Netmask = $Netmask_C;
			}
			return $Netmask_C;
		}
	}

	// Função para realizar a conversão do IP para forma binaria, completando com '0'
	// caso não tenha 8 digitos
	function RetornarOctetoBinario($octeto)
	{
		$ValorBinario = decbin($this->split_ip[$octeto]);
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
		echo $this->split_ip[$octeto];
	}

	// Função para retornar a quantidade de IPs e Hosts
	function CalcularQuantidadeIps($Netmask)
	{

		$Split_Netmask = preg_split("/\./", $Netmask);
		if ($Split_Netmask[1] != 255) {
			$TotalIps_A = 1 * (256 - $Split_Netmask[1]) * 256 * 256;

			return $TotalIps_A;
		}

		if ($Split_Netmask[2] != 255 && $Split_Netmask[1] = 255) {
			$TotalIps_B = 1 * 1 * (256 - $Split_Netmask[2]) * 256;
			return $TotalIps_B;
		}

		if ($Split_Netmask[3] != 255 && $Split_Netmask[2] = 255 && $Split_Netmask[1] = 255) {
			$TotalIps_C = 1 * 1 * 1 * (256 - $Split_Netmask[3]);
			return $TotalIps_C;
		}
	}

	// Realiza o calculo de quantidade de grupos pela netmask
	// Transforma a mascara em binario, conta a quantidade de '1' existentes
	// e faz 2 elevado a esse número
	function CalcularQuantidadeGrupos($Netmask)
	{
		$Split_Netmask = preg_split("/\./", $Netmask);
		if ($Split_Netmask[1] != 255) {

			$Binary_Netmask = decbin($Split_Netmask[1]);
			$Total_Binary = substr_count($Binary_Netmask, "1");
			return pow(2, $Total_Binary);
		}

		if ($Split_Netmask[2] != 255) {
			$Binary_Netmask = decbin($Split_Netmask[2]);
			$Total_Binary = substr_count($Binary_Netmask, "1");
			return pow(2, $Total_Binary);
		}

		if ($Split_Netmask[3] != 255) {
			$Binary_Netmask = decbin($Split_Netmask[3]);
			$Total_Binary = substr_count($Binary_Netmask, "1");
			return pow(2, $Total_Binary);
		}
	}

	function CalcularBroadcast($ip_rede, $netmask, $cidr)
	{
		$Split_Ip = preg_split("/\./", $ip_rede);
		$Split_Netmask = preg_split("/\./", $netmask);

		// Classe A
		if ($cidr >= 8 && $cidr <= 15) {
			$Calculo_Broad = 255 - $Split_Netmask[1];
			$Broadcast = $Split_Ip[0] . "." . $Calculo_Broad . ".255" . ".255";
			return $Broadcast;
		}

		// Classe B
		if ($cidr >= 16 && $cidr <= 23) {
			$Calculo_Broad = 255 - $Split_Netmask[2];
			$Broadcast = $Split_Ip[0] . "." . $Split_Ip[1] . "." . $Calculo_Broad . ".255";
			return $Broadcast;
		}

		// Classe C
		if ($cidr >= 24) {
			$Calculo_Broad = 255 - $Split_Netmask[3];
			$Broadcast = $Split_Ip[0] . "." . $Split_Ip[1] . "." . $Split_Ip[2] . "." . $Calculo_Broad;
			return $Broadcast;
		}
	}

	// Necessário inserir quantidade de grupos pra fazer o cálculo certo de host incial e final
	function CalcularHostFinal($ip_rede, $cidr, $qtd_grupos)
	{
		$Split_Ip = preg_split("/\./", $ip_rede);
		//$Split_Netmask = preg_split("/\./", $netmask);

		// Classe A
		if ($cidr >= 8 && $cidr <= 15) {

			$Host_Inicial = $Split_Ip[0] . "." . (255 - [$Split_Ip[1]]) . "." . "255" . "." . "255";
			return $Host_Inicial;
		}

		// Classe B
		if ($cidr >= 16 && $cidr <= 23) {
			$Host_Inicial = $Split_Ip[0] . "." . $Split_Ip[1] . "." . (255 - $Split_Ip[2]) . "." . "255";
			return $Host_Inicial;
		}

		// Classe C
		if ($cidr >= 24) {
			$Host_Inicial = $Split_Ip[0] . "." . $Split_Ip[1] . "." . $Split_Ip[2] . "." . (255 - $Split_Ip[3]);
			return $Host_Inicial;
		}
	}

	// Necessário inserir quantidade de grupos pra fazer o cálculo certo de host incial e final
	function CalcularHostInicial($ip_rede, $netmask, $cidr, $qtd_grupos)
	{
		$Split_Ip = preg_split("/\./", $ip_rede);
		$Split_Netmask = preg_split("/\./", $netmask);


		// Classe A
		if ($cidr >= 8 && $cidr <= 15) {

			$Host_Inicial = $Split_Ip[0] . "." . ($Split_Netmask[1] - [$Split_Ip[1]] + 2) . "." . "0" . "." . "0";
			return $Host_Inicial;
		}

		// Classe B
		if ($cidr >= 16 && $cidr <= 23) {
			$Host_Inicial = $Split_Ip[0] . "." . $Split_Ip[1] . "." . ($Split_Netmask[2] - $Split_Ip[2] + 2) . "." . "0";
			return $Host_Inicial;
		}

		// Classe C
		if ($cidr >= 24) {
			$Host_Inicial = $Split_Ip[0] . "." . $Split_Ip[1] . "." . $Split_Ip[2] . "." . ($Split_Netmask[3] - $Split_Ip[3] + 2);
			return $Host_Inicial;
		}
	}
}
