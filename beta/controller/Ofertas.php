<?php
	
require "IpLocation.php";

class Ofertas extends IpLocation
{
	public function __construct()
	{
		$info = new IpLocation;
		$info = IpLocation::Cidade();

		var_dump($info);
	}

	public function Guerrilha(){



	}

}