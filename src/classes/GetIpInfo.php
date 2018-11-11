<?php

class GetIpInfo
{
	public $ip;
	private $access_key = '891568b2aa3d63cd7830ee80825bec3d';

	public function setIp($ip)
	{
		$this->ip = $ip;

		if($this->ip == "::1" or $this->ip == null)
		{
			$this->ip = '177.191.79.171';
		}
	}

	public function getInfo()
	{
		// Initialize CURL:
		$ch = curl_init('http://api.ipstack.com/'.$this->ip.'?access_key='.$this->access_key.'');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		// Store the data:
		$json = curl_exec($ch);
		curl_close($ch);

		// Decode JSON response:
		return $api_result = json_decode($json, true);
	}


}