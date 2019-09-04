<?php

function PostIP($ip)
{
	if (isset($ip))
	{
		$bool_ip = true;
	}
	else
	{
		$bool_ip = false;
		//echo "IP NULO";
	}
	return $bool_ip;
}


function PostCIDR($cidr)
{
	if(isset($cidr))
	{
		$CIDR = $cidr;
		if ($CIDR > 32 || $CIDR < 8)
		{
			//echo "CIDR INVALIDO";
			$bool_cidr = false;
		}
		else
		{
		//echo $CIDR;
		$bool_cidr = true;
		}
	}
	else
	{
		//echo "CIDR NULO";
		$bool_cidr = false;
	}
	return $bool_cidr;
}

function PostBOOL($bool_cidr, $bool_ip)
{
	if($bool_cidr && $bool_ip)
	{
		$SPLIT_IP = preg_split("/\./", $IP);
	//print_r($Split_IP);
		if ($CIDR >= 24)
		{
			$mensagem = "ok BOOL";
		}
	}
	else
	{
		$mensagem = "Falha BOOL";
	}
	return $mensagem;
}
?>