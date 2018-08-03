<?php
$apiURL = "http://192.168.1.50/solar_api/v1/GetInverterRealtimeData.cgi?Scope=Device&DeviceID=1&DataCollection=CommonInverterData";
$jsonData = file_get_contents($apiURL);
// Decode into an object
$solar = json_decode($jsonData, true);
// Real time AC being fed into the mains
$solarPower = $solar["Body"]["Data"]["PAC"]["Value"];
$solarArray = array('power' => $solarPower);
$solarjson = json_encode($solarArray);
echo $solarjson;

?>