<?php


//echo($_GET['code']);
//echo($_GET['scope']);

$code = $_GET['code'];
//$code = '{'.$code.'}';
//$code = '9DC4B204C3017F9C2DB636555E3959EEE8F452CE478D33E83B892C6418B9EB6B}';
$client_id = 'sandbox-sandboxvaccination-6fd057';
$client_secret ='d553ce4e-4d0e-475a-b950-85ae4b13b4fb';
$redirect_uri = 'https://www.mybank-pay.com/neumorphism/tl_example.php';
//$redirect_uri ='https://console.truelayer.com/redirect-page';

//exec('curl -X POST "https://auth.truelayer.com/connect/token" -d "grant_type=authorization_code" -d "client_id= '. $client_id .'" -d "client_secret= '. $client_secret .'" -d  "redirect_uri= '. $redirect_uri .'"  -d  "code= '. $code .'"' , $output, $return_var);


//exec('curl -X POST "https://auth.truelayer.com/connect/token" -d "grant_type=authorization_code" -d "client_id=sandbox-sandboxvaccination-6fd057" -d "client_secret=d553ce4e-4d0e-475a-b950-85ae4b13b4fb" -d  "redirect_uri=https://www.mybank-pay.com/neumorphism/tl_example.php"  -d  "code=F72365C6889E25B6FB697C716062C8D890E8B059B6112AF59DBBE172D3638172"' , $output, $return_var);



//example from DB Banking API
//exec('curl -X POST "https://simulator-api.db.com:443/gw/dbapi/referenceData/verifyCustomer/v1/" -H "Content-Type: application/json" -H "Accept: application/json" -H "Authorization: Bearer '. $client->access_token .'" -d "{\"firstName\": \"Kim\",\"lastName\": \"Schmid\",\"dateOfBirth\": \"1986-08-05\"}"', $output1, $return_var);


//var_dump($output);
//var_dump($return_var);

// Note: the first link to start with is the 'initiation link', see on https://console.truelayer.com/data/tools
// concretely it is: https://auth.truelayer-sandbox.com/?response_type=code&client_id=sandbox-sandboxvaccination-6fd057&scope=info%20accounts%20balance%20cards%20transactions%20direct_debits%20standing_orders%20offline_access&redirect_uri=https://www.mybank-pay.com/neumorphism/tl_example.php&providers=uk-ob-all%20uk-oauth-all%20uk-cs-mock



// 1.) Authorization Step (to get code and fetch from this code the access_token)
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://auth.truelayer-sandbox.com/connect/token',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => 'grant_type=authorization_code&client_id=sandbox-sandboxvaccination-6fd057&client_secret=d553ce4e-4d0e-475a-b950-85ae4b13b4fb&redirect_uri=https%3A%2F%2Fwww.mybank-pay.com%2Fneumorphism%2Ftl_example.php&code='.$code,
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
echo '<br>Access Token: <br>';
$character = json_decode($response);
$accesstoken = $character->access_token;
echo $accesstoken;
echo '<br>Refresh Token: <br>';
echo $character->refresh_token;



// 2.) to get list of cards 
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.truelayer-sandbox.com/data/v1/cards',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'Authorization: Bearer '.$accesstoken
  ),
));

$response = curl_exec($curl);
curl_close($curl);
echo '<br>List of cards: <br>';
echo $response;



// 3.) to get list of accounts
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.truelayer-sandbox.com/data/v1/accounts',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'Authorization: Bearer '.$accesstoken
  ),
));

$response = curl_exec($curl);
curl_close($curl);
echo '<br>List of accounts: <br>';
echo $response;
$character = json_decode($response);
$accountid = $character->results;
echo '<br>AccountID: <br>'.$accountid;   // still bug!!!!
var_dump($accountid);

?>
