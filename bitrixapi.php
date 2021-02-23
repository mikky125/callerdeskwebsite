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


 $queryUrl = 'https://forcesight.bitrix24.in/rest/1/ho207rnksh979pr1/telephony.externalcall.register.json';
 $queryData = http_build_query(array(
 "USER_PHONE_INNER" => $DestinationNumber,
 "USER_ID" => '1',
 "PHONE_NUMBER" => $SourceNumber,
 "TYPE" => "2",
 "CALL_START_DATE" => $StartTime,
 "CRM_CREATE" => 1,
 "CRM_SOURCE" => '',
 "TYPE" => 2));

 $curl = curl_init();
 curl_setopt_array($curl, array(
 CURLOPT_SSL_VERIFYPEER => 0,
 CURLOPT_POST => 1,
 CURLOPT_HEADER => 0,
 CURLOPT_RETURNTRANSFER => 1,
 CURLOPT_URL => $queryUrl,
 CURLOPT_POSTFIELDS => $queryData,
 ));

 $result = curl_exec($curl);
 curl_close($curl);

 //$result = json_decode($result, 1);
echo $result;

?>
