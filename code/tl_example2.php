<?php
/*
 * google_contacts_api_php_example.php
 *
 * @(#) $Id: google_contacts_api_php_example.php,v 1.1 2017/03/15 12:51:49 mlemos Exp $
 *
 */

// Include the necessary class files directly or
// vendor/autoload.php if you used composer to install the package.
	require('http.php');
	require('oauth_client.php');

	$client = new oauth_client_class;
	$client->server = 'TL';
	$client->debug = false;
	$client->debug_http = true;

	$client->redirect_uri = 'https://'.$_SERVER['HTTP_HOST'].
		dirname(strtok($_SERVER['REQUEST_URI'],'?')).'/tl_example.php';

	$client->client_id = 'sandbox-sandboxvaccination-6fd057'; $application_line = __LINE__;
	$client->client_secret = 'd553ce4e-4d0e-475a-b950-85ae4b13b4fb';

	if(strlen($client->client_id) == 0
	|| strlen($client->client_secret) == 0)
		die('Please go to True Layer Developer APIs console page');

	/* API permissions
	 */
	$client->scope = 'info accounts balance cards transactions direct_debits standing_orders offline_access';
	if(($success = $client->Initialize()))
	{
		if(($success = $client->Process()))
		{
			if(strlen($client->authorization_error))
			{
				$client->error = $client->authorization_error;
				$success = false;
			}
			elseif(strlen($client->access_token))
			{
				$success = $client->CallAPI(
					'https://simulator-api.db.com:443/gw/dbapi/banking/cashAccounts/v2/?limit=10&offset=0&accountTypeFilter=ALL',
					'GET', array(), array('FailOnAccessError'=>true), $bankdata);
				$success2 = $client->CallAPI(
					'https://simulator-api.db.com:443/gw/dbapi/referenceData/verifyCustomer/v1/',
					'POST', array(), array('FailOnAccessError'=>true, 'RequestBody'=>'{"firstName": "Anna",  "lastName": "string",  "dateOfBirth": "string"}', 'RequestContentType'=>'application/json'), $bankdata2);				
			}
		}
		$success = $client->Finalize($success);
	}
	if($client->exit)
		exit;
	if($success)
	{
?>
<!DOCTYPE html>
<html>
<head>
<title>VaccinatioN Wallet - Access to Bank via TL for User Authentication</title>
</head>
<body>
<h1>VaccinatioN Wallet - Access to Bank via TL for User Authentication</h1>
<?php

		// API URL
		$url = 'https://simulator-api.db.com:443/gw/dbapi/referenceData/verifyCustomer/v1/';
		// Create a new cURL resource
		$ch = curl_init($url);
		// Setup request to send json via POST
		$array = array("firstName" => "Kim", "lastName" => "Schmid");
		$payload = json_encode($array);
		$accesstoken = 'Authorization: Bearer '.$client->access_token;
		// Attach encoded JSON string to the POST fields
		curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
		// Set the content type to application/json
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json', $accesstoken));
		// Return response instead of outputting
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		// Execute the POST request
		$result = curl_exec($ch);
		// Close cURL resource
		curl_close($ch);
		var_dump($result);



		echo 'Fun9'.'<br>';
		
		echo '<br><br>';
		exec('curl -X POST "https://simulator-api.db.com:443/gw/dbapi/referenceData/verifyCustomer/v1/" -H "Content-Type: application/json" -H "Accept: application/json" -H "Authorization: Bearer '. $client->access_token .'" -d "{\"firstName\": \"Kim\",\"lastName\": \"Schmid\",\"dateOfBirth\": \"1986-08-05\"}"', $output1, $return_var);
		var_dump($output1);		
		
		
		echo '<br><br>';
		echo 'part2: '.'<br>';
		// output of all cash accounts
		exec('curl -X GET "https://simulator-api.db.com:443/gw/dbapi/banking/cashAccounts/v2/?limit=10&offset=0&accountTypeFilter=ALL" -H "Accept: application/json" -H "Authorization: Bearer ' . $client->access_token . '"', $output2, $return_var);
		var_dump($output2);
		
		echo '<br></br>';

		//output of verifyCustomerData

		echo '<pre>';
		echo '<pre>'; print_r($bankdata); echo '</pre>';
		echo'part Account';
		echo '<pre>';
		echo '<pre>'; print_r($bankdata2); echo '</pre>';
		echo $client->access_token;
		//foreach($bankdata->connections as $bankdata)
		//{
			//echo htmlspecialchars($contact->names[0]->displayName), "\n";
		//}
		//echo '</pre>';
?>
</body>
</html>
<?php
	}
	else
	{
?>
<!DOCTYPE html>
<html>
<head>
<title>OAuth client error</title>
</head>
<body>
<h1>OAuth client error</h1>
<pre>Error: <?php echo HtmlSpecialChars($client->error); ?></pre>
</body>
</html>
<?php
	}

?>