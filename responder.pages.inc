<?php
/**
 * @file
 * TODO Auto generated file, add description.
 */


/**
 * TODO Autogenerated function.
 */
function responder_view() {
	
	$response = responder();
	
	$json_response = json_decode($response);
	$created = count($json_response->SUBSCRIBERS_CREATED);
	if($created === "1" ){
		echo "created";
	} else {
		echo "failed";
		var_dump($json_response);
	}
	
	die();	exit(); //no need for drupal ajax stuff
	
}
