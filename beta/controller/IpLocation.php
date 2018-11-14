<?php

include "GetIpInfo.php";

class IpLocation extends GetIpInfo
{
	public $info;

	public function __construct(){

		GetIpInfo::setIp('177.191.79.171');
		$info = GetIpInfo::getInfo();

		$this->info = array('ipestado' => $info['region_name'], 'ipestado' => $info['city'], 'ipestado' => $info['region_name']);
	}

	public function Cidade()
	{
		return $this->info;
	}
}