<?php

function PostIP($ip)
{
	if (isset($ip))
	{
		$IP = $ip;
		//echo $IP;
		$bool_ip = true;
	}
	else
	{
		$bool_ip = false;
		echo "IP NULO";
	}
}
?>