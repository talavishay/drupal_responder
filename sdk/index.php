<?php
	# include the libraries needed to make the REST API requests
	include 'OAuth.php';
	include 'responder_sdk.php';
	
	# Tokens; fill with the tokens acquired from the responder support team
	$client_key = 'E8B744B7CD2CD597376DDB9179166009';
	$client_secret = 'BE998296C3D2DCBF0702771E8662114F';
	
	$user_key = 'FE53182CCBB674367103D9624655A489';
	$user_secret = '5FBB29EB250C40D7750119E63776D201';
	
	# create the responder request instance
	$responder = new ResponderOAuth($client_key, $client_secret, $user_key, $user_secret);
	
	# the data passed with the request (not needed with GET method)
	$post_data = array(
		'subscribers' => json_encode(
			array(
				array(
					"NAME" => "John Smith",
      				"EMAIL" => "johnsmaaith@gmail.com",
      				"PHONE" => "052-2345678",
      				"DAY" => 12
				)
			)
		)
	);
	
	# execute the request
	$response = $responder->http_request('lists/131011/subscribers', 'post', $post_data);
	$json_response = json_decode($response);
	header('Content-Type: text/html; charset=utf-8');
	echo '<pre>';
	
	# print the response
	if ($json_response) {
		print_r($json_response);
	} else {
		print_r($response);
	}
?>