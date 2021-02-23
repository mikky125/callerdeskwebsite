<?php 
$logPath = "logs/GetMsisdnlog_".date("Ymd").".txt";
error_log("Notification Hit received"."\n", 3, $logPath);
$inmsisdn = $_GET['inmsisdn'];
$inDID = $_GET['inDID'];
$inRouteID = $_GET['inRouteID'];
$inAccID = $_GET['inAccID'];
if($inAccID=='12351') {
$url = "https://leads.gomechanic.app/caller_desk/?mobile=$inmsisdn";
error_log("URl Request:".date("Ymd hms")." Url request:". $url."\n", 3, $logPath);
$response = file_get_contents($url);
error_log("URl Response:".date("Ymd hms")." Url response:". $response."\n", 3, $logPath);
$data = json_decode($response, true);
if($data['status']){
$contactlist = $data['data']['contact'];
$count = count($contactlist);
$contact = implode (",", $contactlist);
error_log("IVR Response:".date("Ymd hms")." IVR response: $count:$contact:-1 \n", 3, $logPath);
echo "$count:$contact:-1"; 
} else {
 error_log("IVR Response:".date("Ymd hms")." IVR response: -1:-1:-1 \n", 3, $logPath);
 echo '-1:-1:-1';
}
} else {
 echo 'Invalid Account Id';
}

?>