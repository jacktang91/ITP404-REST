<?php

function getEvent($c,$d,$k){
	$url = "http://api.eventful.com/rest/events/search?app_key=mGPb7CR5tNmWZtzK&location=$c&date=$d&keywords=$k&page_size=10";
	$xmlString = file_get_contents($url);
	$simpleXML = simplexml_load_string($xmlString);

	return $simpleXML;
}

function redirect($url){
	header("Location:$url");
}


?>