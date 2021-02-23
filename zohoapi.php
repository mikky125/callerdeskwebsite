<?php
require_once "/var/www/html/callerdeskio/enquiry/config.php";
date_default_timezone_set('Asia/Kolkata');

$SourceNumber = urlencode('+91'.(int)$_GET['SourceNumber']);
$DestinationNumber = $_GET['DestinationNumber'];
$DisplayNumber = $_GET['DisplayNumber'];
$StartTime = $_GET['StartTime'];
$StartTime = str_replace('n',' ',$StartTime);
$StartTime = urlencode(gmdate('Y-m-d H:i:s', strtotime($StartTime)));
$EndTime = $_GET['EndTime'];
$EndTime = str_replace('n',' ',$EndTime);
$EndTime = gmdate('Y-m-d H:i:s', strtotime($EndTime));
$CallDuration = $_GET['CallDuration'];
$state = $_GET['state'];
$UserId = $_GET['UserId'];
$client_id = $_GET['client_id'];
$SoundUrl = $_GET['SoundUrl'];

$sql = mysqli_query($mysqli,"Select * From tbl_zoho_integration where user_id=$client_id");
$row = mysqli_fetch_assoc($sql);
$api_domain= $row['api_domain'];
$access_token_saved= $row['access_token'];
$refresh_token= $row['refresh_token'];
$sql = mysqli_query($mysqli,"Select zohouserid From tbl_zoho_user where agent_number='$DestinationNumber' and user_id=$client_id order by id desc limit 1");
$row1 = mysqli_fetch_assoc($sql);
$zohouserid= $row1['zohouserid'];
$DestinationNumber = urlencode('+91'.(int)$_GET['DestinationNumber']);
  if (strpos($api_domain, '.com') !== false) {
    $urlCall = "https://accounts.zoho.com/oauth/v2/token?refresh_token=$refresh_token&client_id=1000.R9ZXYGMDO2KW73EWPQOQJAHPUCAJBH&client_secret=7fc1c564405e0c076fcc30a9e9de0ecd797776d6ff&redirect_uri=https://app.callerdesk.io/admin/zoho-data&grant_type=refresh_token";
        } else {
$urlCall = "https://accounts.zoho.in/oauth/v2/token?refresh_token=$refresh_token&client_id=1000.R9ZXYGMDO2KW73EWPQOQJAHPUCAJBH&client_secret=7fc1c564405e0c076fcc30a9e9de0ecd797776d6ff&redirect_uri=https://app.callerdesk.io/admin/zoho-data&grant_type=refresh_token";
            }
        $arrContextOptions=array(
        "ssl"=>array(
          "verify_peer"=>false,
          "verify_peer_name"=>false,
         ),
        'http' => array(
          'method' => 'POST',
          ),
        ); 
    $urlCall = str_replace(' ', '%20', $urlCall);
    $response = file_get_contents($urlCall, false, stream_context_create($arrContextOptions));
    $response = json_decode($response,true);  
    $access_token=$response['access_token']; 
    if(empty($access_token)) {
    $access_token = $access_token_saved;
    }
if(empty($DisplayNumber)) {
$type='dialed';
} else {
$type='received';
}
if($state=='ANSWER'){
  $state ='ended';
} elseif ($state=='BUSY') {
   $state ='busy';
} elseif ($state=='CANCEL' || $state=='Unavailable' ) {
   $state ='rejected';
} elseif ($state=='NOANSWER') {
  $state ='noanswer';
} elseif ($state=='Congestion') {
  $state ='invalid';
} elseif ($state=='Ring timeout' || $state=='cancel-Agent') {
  $state ='notavailable';
}

if($type=='dialed'){ // outgoing
     if($state =='ended'){
    $data_string = "type=$type&state=$state&id=$UserId&from=$DestinationNumber&to=$SourceNumber&duration=$CallDuration&start_time=$StartTime&voiceuri=$SoundUrl";
    } elseif($state=='answered' || $state=='ringing') {
    $data_string = "type=$type&state=$state&id=$UserId&from=$DestinationNumber&to=$SourceNumber";  
    } elseif($type=='dialed') {
    $data_string = "type=$type&state=$state&id=$UserId&from=$DestinationNumber&to=$SourceNumber&start_time=$StartTime";
          if(!empty($zohouserid)){
          $data_string_error = "code=$state&from=$DestinationNumber&to=$SourceNumber&zohouser=$zohouserid";
          } else {
          $data_string_error = "code=$state&from=$DestinationNumber&to=$SourceNumber";
          }
          if($state!='noanswer' && $state!='rejected') {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"$api_domain/phonebridge/v3/clicktodialerror");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,$data_string_error);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded', "Authorization:Zoho-oauthtoken $access_token"));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $server_output = curl_exec ($ch);
        echo $server_output;
        curl_close ($ch);
        exit;
         }
    } elseif($type=='received') {
    $data_string = "type=$type&state=missed&id=$UserId&from=$DestinationNumber&to=$SourceNumber&start_time=$StartTime";  
    }

} elseif ($type=='received') { // incoming
    if($state =='ended'){
  $data_string = "type=$type&state=$state&id=$UserId&from=$SourceNumber&to=$DestinationNumber&duration=$CallDuration&start_time=$StartTime&voiceuri=$SoundUrl";
  } elseif($state=='answered' || $state=='ringing') {
  $data_string = "type=$type&state=$state&id=$UserId&from=$SourceNumber&to=$DestinationNumber";  
  } elseif($type=='dialed') {
  $data_string = "type=$type&state=$state&id=$UserId&from=$SourceNumber&to=$DestinationNumber&start_time=$StartTime";
  } elseif($type=='received') {
  $data_string = "type=$type&state=missed&id=$UserId&from=$SourceNumber&to=$DestinationNumber&start_time=$StartTime";  
  }
}
  if(!empty($zohouserid)){
    $data_string .= "&zohouser=$zohouserid";
  }
  //print_R($data_string); die;
try
{
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"$api_domain/phonebridge/v3/callnotify");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,$data_string);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded', "Authorization:Zoho-oauthtoken $access_token"));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$server_output = curl_exec ($ch);
echo $server_output;
curl_close ($ch);
} catch (Exception $ex) { 
    curl_close($ch);
}
?>
