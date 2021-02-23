<?php
$SourceNumber = $_GET['SourceNumber'];
$DestinationNumber = $_GET['DestinationNumber'];
if(empty($DestinationNumber) || $DestinationNumber=='0' ) { 
$DestinationNumber = $_GET['DisplayNumber'];
}
$DisplayNumber = $_GET['DisplayNumber'];
$StartTime = $_GET['StartTime'];
$StartTime = str_replace('n',' ',$StartTime);
$EndTime = $_GET['EndTime'];
$EndTime = str_replace('n',' ',$EndTime);
$CallDuration = $_GET['CallDuration'];
$Status = $_GET['Status'];
if(empty($Status)) { 
$Status = 'No Answer';
}
$UserId = $_GET['UserId'];

$data_string = '{"SourceNumber":"'.$SourceNumber.'","DestinationNumber":"'.$DestinationNumber.'","DisplayNumber":"'.$DisplayNumber.'","StartTime":"'.$StartTime.'","EndTime":"'.$EndTime.'","CallDuration":"'.$CallDuration.'","Direction":"Inbound","Status":"'.$Status.'","CallNotes":"Enquired about product","CallSessionId":"'.$UserId.'","UserId":"'.$UserId.'"}';
try
{
$curl = curl_init('https://telephony-in21.leadsquared.com/1/api/Telephony/LogCallComplete/248554aac80ed6e66df0800e1ed7953e17/fb1dc70d-672e-4b41-bc37-cfac0f283df4');
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_HEADER, 0);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        "Content-Type:application/x-www-form-urlencoded",
        "Content-Length:".strlen($data_string)
        ));
$json_response = curl_exec($curl);
echo $json_response;
curl_close($curl);
} catch (Exception $ex) { 
    curl_close($curl);
}
?>
