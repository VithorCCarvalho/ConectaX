<?php

require "src/classes/GetIpInfo.php";

$info = new GetIpInfo;
$info->setIp($_SERVER["REMOTE_ADDR"]);
$info->getInfo();

var_dump($info->getInfo());