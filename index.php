<?php
header('Access-Control-Allow-Origin: *');
$action=$_REQUEST["action"];
if($action=="legislator"){
	$url="http://congress.api.sunlightfoundation.com/legislators?apikey=4f97288480da41d3b574d4c02be01448&per_page=all";
	$Json=file_get_contents($url);
    echo $Json;
}else if($action=="activeBill"){
	$url="http://congress.api.sunlightfoundation.com/bills?apikey=4f97288480da41d3b574d4c02be01448&per_page=50&history.active=true";
	$Json=file_get_contents($url);
	echo $Json;
}else if($action=="newBill"){
	$url="http://congress.api.sunlightfoundation.com/bills?apikey=4f97288480da41d3b574d4c02be01448&per_page=50&history.active=false";
	$Json=file_get_contents($url);
	echo $Json;
}
else if($action=="committee"){
	$url="http://congress.api.sunlightfoundation.com/committees?apikey=4f97288480da41d3b574d4c02be01448&per_page=all";
	$Json=file_get_contents($url);
	echo $Json;
}else if($action=="bill5"){
	$bioguide_id=$_REQUEST["bioguide_id"];
	$url="http://congress.api.sunlightfoundation.com/bills?apikey=4f97288480da41d3b574d4c02be01448&per_page=5&sponsor.bioguide_id=".$bioguide_id;
	$Json=file_get_contents($url);
	echo $Json;
}else if($action=="committee5"){
	$bioguide_id=$_REQUEST["bioguide_id"];
	$url="http://congress.api.sunlightfoundation.com/committees?apikey=4f97288480da41d3b574d4c02be01448&per_page=5&member_ids=".$bioguide_id;
	$Json=file_get_contents($url);
	echo $Json;
}
?>