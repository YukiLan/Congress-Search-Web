<?php
header("Content-type:text/html;charset=utf-8");
$action=$_GET["action"];
if($action=="init"){
	$url="https://congress.api.sunlightfoundation.com/legislators?apikey=4f97288480da41d3b574d4c02be01448&per_p age=all";
	$Json=file_get_contents($url);
    $response=json_decode($Json);
    echo $Json;
}
?>