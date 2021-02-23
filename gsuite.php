<?php 
  $ip = 'localhost';
  $dsn = 'cloudytel';
  $username = 'root';
  $pwd = 'Dsw34sdf@dhs7283';

///////////////////////DB Connect///////////////////////////////////  
	//$mysqli = new mysqli($ip, $username, $pwd, $dsn);

	if ($mysqli->connect_errno) {
		printf("Connect failed: %s\n", $mysqli->connect_error);
		exit();
	}
$client_id = '1096650753839-uu7dq6899jla8trmga7t3v7ruis663jq.apps.googleusercontent.com';
$client_secret = '8Vw5UkWIFX9cB14kdWKpirLL';
$spreadsheet_id = '1vvmZnjEGlFca-IqL4du8o4-kF060m50MbvSJn5ubEiE';
 function GetRefreshedAccessToken($client_id, $refresh_token, $client_secret) {  
    $url_token = 'https://www.googleapis.com/oauth2/v4/token';          

    $curlPost = 'client_id=' . $client_id . '&client_secret=' . $client_secret . '&refresh_token='. $refresh_token . '&grant_type=refresh_token';
    $ch = curl_init();      
    curl_setopt($ch, CURLOPT_URL, $url_token);      
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);        
    curl_setopt($ch, CURLOPT_POST, 1);      
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $curlPost);    
    $data = json_decode(curl_exec($ch), true);  //print_r($data);
    $http_code = curl_getinfo($ch,CURLINFO_HTTP_CODE);      
    if($http_code != 200) 
        throw new Exception('Error : Failed to refresh access token');
    
    return $data;
}
function UpdateSpreadsheetProperties($spreadsheet_id, $spreadsheet_title, $access_token, $mysqli,$user_id,$spreadsheet_index) {        
            //$date_cond1=" DATE(a.call_date)=date(now()) ";
            $date_cond1=" DATE(a.call_date)>date(curdate()-6) ";
           $logPath_app1  = "/home/php/log/SendCallLogsGsuite_".date('Ymd').".txt";
            if($user_id == '1'){
            $getCallLogs1= "SELECT a.*,b.desk_phone,c.group_name FROM tbl_ivr_call_log as a left join tbl_did_manager as b on a.call_from=b.did_no left join tbl_group as c on a.user_action_destination=c.group_id WHERE $date_cond1 AND a.route_id !=0 order by a.call_date desc";
          } else {
          $getCallLogs1= "SELECT a.*,b.desk_phone,c.group_name FROM tbl_ivr_call_log as a left join tbl_did_manager as b on a.call_from=b.did_no left join tbl_group as c on a.user_action_destination=c.group_id WHERE a.acc_no = '".$user_id."' AND $date_cond1 AND a.route_id !=0 order by a.call_date desc";  
          }
           $query_result3 = $mysqli->query($getCallLogs1);

         if ($query_result3->num_rows > 0) {
                        $x = $spreadsheet_index;
                        if($spreadsheet_index == '2'){
                        $i = 1;
                      } else {
                      $i = $spreadsheet_index-1;
                      }
            while($sub = $query_result3->fetch_assoc()) {
                    $routing_detail = '';
                    $routing = '';
                    if(!empty($routing_detail)) 
                              {
                     $routing = implode(", ", array_column($routing_detail, "receivermsisdn"));
                    }
                    if ($sub['route_id'] == 1 && $sub['outcallduration'] == 0) {
                        $status = 'No Answered';
                    } else if ($sub['route_id'] == 3 && $sub['outcallduration'] == 0) {
                        $status = 'No Answered';
                    } else if ($sub['route_id'] == 4 && $sub['outcallduration'] == 0) {
                        $status = 'No Answered';
                    } else if ($sub['route_id'] == 5) {
                        $status = 'Voice Mail';
                    } else if ($sub['outcallduration'] != 0) {
                        $status = 'Answered';
                    } else if ($sub['route_id'] == 2 && $sub['outcallduration'] == 0) {
                        $status = 'Welcome Sound';
                    }
                    $file_path = "No recorded File";
                    if (!empty($sub['recordfilename'])) {
                        $path = str_replace("/var/www/html/callrecords", "", $sub['recordfilepath']);
                        $file_path = 'https://callrecords.callerdesk.io'.$path. $sub['recordfilename'] . '.wav';
                    }
                     $call_group = "Not Assigned";
                    if (!empty($sub['group_name'])) {
                        $call_group = $sub['group_name'];
                    } 
                     $key_pressed = '';
                     if (!empty($sub['key_pressed'])) {
                        $key_pressed = $sub['key_pressed'];
                      } 

                      $values[] =  array(0 => "$i",1 =>  '+91-' . $sub['desk_phone'],2 => $sub['call_to'],3 => $sub['call_reciever'],4 => $call_group,5 => $sub['receiver_name'],6 => $sub['call_date'],7 => $sub['duration'],8 => $status,9 => $sub['circle'],10 => $file_path,11 => $routing,12 => $key_pressed,13 => $sub['incallcharges'] );
  
                    // $this->excel->setActiveSheetIndex(0)
                    //     ->setCellValue("A$x", $i)
                    //     ->setCellValue("B$x", '+91-' . $sub['desk_phone'])
                    //     ->setCellValue("C$x", $sub['call_to'])
                    //     ->setCellValue("D$x", $sub['call_reciever'])
                    //     ->setCellValue("E$x", $call_group)
                    //     ->setCellValue("F$x", $sub['receiver_name'])
                    //     ->setCellValue("G$x", $sub['call_date'])
                    //     ->setCellValue("H$x", $sub['duration'])
                    //     ->setCellValue("I$x", $status)
                    //                 ->setCellValue("J$x", $sub['circle'])
                    //     ->setCellValue("K$x", $file_path)
                    //     ->setCellValue("L$x", $routing)
                    //     ->setCellValue("M$x", $key_pressed)
                    //     ->setCellValue("N$x", $sub['incallcharges']);
                    $i++;
                    $x++;
                } 
  
    $json = '{
      "range": "Sheet1!A'.$spreadsheet_index.':N'.($x-1).'",
      "majorDimension": "ROWS",
      "values": '.json_encode($values).',
    }';
        $ch = curl_init();      
        curl_setopt($ch, CURLOPT_URL, "https://sheets.googleapis.com/v4/spreadsheets/" . $spreadsheet_id."/values/Sheet1!A".$spreadsheet_index.":N".($x-1)."?valueInputOption=USER_ENTERED");      
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);        
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');   
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Bearer '. $access_token, 'Content-Type: application/json')); 
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json);   
        $data = json_decode(curl_exec($ch), true);
        $http_code = curl_getinfo($ch,CURLINFO_HTTP_CODE);
        if($http_code != 200) {
          $logString= date('Y-m-d H:i:s')."|Error : Failed to update spreadsheet properties|".print_r($data, true)."\r\n";
      error_log($logString, 3, $logPath_app1);
      return $spreadsheet_index;
        } else {
      $logString= date('Y-m-d H:i:s')."|Success|".print_r($data, true)."|"."\r\n";
      error_log($logString, 3, $logPath_app1);
      return $x;
        }
      } else {
      $logString= date('Y-m-d H:i:s')."|No Call Data Available|"."\r\n";
      error_log($logString, 3, $logPath_app1);
      return $spreadsheet_index;
      }
    }

$getGsuiteDetails=$mysqli->query("SELECT * FROM `tbl_gsuite_integration` where user_id=509");
      if ($getGsuiteDetails->num_rows > 0) 
      {
        while($result_GsuiteDetails = $getGsuiteDetails->fetch_assoc()) 
          {
        $id=$result_GsuiteDetails['id'];
          $user_id=$result_GsuiteDetails['user_id'];
          $spreadsheet_id=$result_GsuiteDetails['spreadsheet_id'];
          $spreadsheet_index=$result_GsuiteDetails['spreadsheet_index'];
          $refresh_token=$result_GsuiteDetails['refresh_token'];

        $data = GetRefreshedAccessToken($client_id, $refresh_token, $client_secret);
        $access_token = $data['access_token'];
        $updatedata = UpdateSpreadsheetProperties($spreadsheet_id, 'update_data', $access_token, $mysqli,$user_id,$spreadsheet_index);
        $mysqli->query("update tbl_gsuite_integration set spreadsheet_index=$updatedata where id=$id");
        print_r($updatedata); die;

}
}



 function CreateSpreadsheet($spreadsheet_title, $access_token) {
		   // $curlPost = array('properties' => array('title' => $spreadsheet_title));
			$excel_data[0] = array (
                                      'values' => 
                                      array (
                                        0 => 
                                        array (
                                          'userEnteredValue' => 
                                          array (
                                            'stringValue' => 'S.NO.',
                                          ),
                                        ),
                                        1 => 
                                        array (
                                          'userEnteredValue' => 
                                          array (
                                            'stringValue' => 'DESK PHONE',
                                          ),
                                        ),
                                        2 => 
                                        array (
                                          'userEnteredValue' => 
                                          array (
                                            'stringValue' => 'CALLER',
                                          ),
                                        ),
                                        3 => 
                                        array (
                                          'userEnteredValue' => 
                                          array (
                                            'stringValue' => 'MEMBER NO.',
                                          ),
                                        ),
                                          4 => 
                                        array (
                                          'userEnteredValue' => 
                                          array (
                                            'stringValue' => 'Call Group',
                                          ),
                                        ),
                                           5 => 
                                        array (
                                          'userEnteredValue' => 
                                          array (
                                            'stringValue' => 'MEMBER',
                                          ),
                                        ),
                                           6 => 
                                        array (
                                          'userEnteredValue' => 
                                          array (
                                            'stringValue' => 'DATE TIME',
                                          ),
                                        ),
                                           7 => 
                                        array (
                                          'userEnteredValue' => 
                                          array (
                                            'stringValue' => 'DURATION',
                                          ),
                                        ),
                                           8 => 
                                        array (
                                          'userEnteredValue' => 
                                          array (
                                            'stringValue' => 'STATUS',
                                          ),
                                        ),
                                           9 => 
                                        array (
                                          'userEnteredValue' => 
                                          array (
                                            'stringValue' => 'CIRCLE',
                                          ),
                                        ),
                                           10 => 
                                        array (
                                          'userEnteredValue' => 
                                          array (
                                            'stringValue' => 'FILE',
                                          ),
                                        ),
                                             11 => 
                                        array (
                                          'userEnteredValue' => 
                                          array (
                                            'stringValue' => 'Routing details',
                                          ),
                                        ),
                                             12 => 
                                        array (
                                          'userEnteredValue' => 
                                          array (
                                            'stringValue' => 'Key',
                                          ),
                                        ),
                                             13 => 
                                        array (
                                          'userEnteredValue' => 
                                          array (
                                            'stringValue' => 'Coins',
                                          ),
                                        ),

                                      ),
                                    );
            $date_data  = $_SESSION['daterange'];
            $daterange  = explode("-", $date_data);
            $start_date = $daterange[0];
            $start_date = date("Y-m-d", strtotime($start_date));
            $end_date   = $daterange[1];
            $end_date   = date("Y-m-d", strtotime($end_date));
            $member_calllogs =  $_SESSION['member_calllogs'] ;
            $source =  $_SESSION['source'] ;
            $calls      = $this->cloudy_model->get_allcalls_csv($start_date, $end_date, $member_calllogs, $source);
            if (!empty($calls)) {
                $i = 1;
                foreach ($calls as $sub) {
                    
                  $routing_detail = $this->cloudy_model->getrouting_detail($sub['user_id']);
                    $routing = '';
                    if(!empty($routing_detail)) 
                              {
                     $routing = implode(", ", array_column($routing_detail, "receivermsisdn"));
                    }
                    if ($sub['route_id'] == 1 && $sub['outcallduration'] == 0) {
                        $status = 'No Answered';
                    } else if ($sub['route_id'] == 3 && $sub['outcallduration'] == 0) {
                        $status = 'No Answered';
                    } else if ($sub['route_id'] == 4 && $sub['outcallduration'] == 0) {
                        $status = 'No Answered';
                    } else if ($sub['route_id'] == 5) {
                        $status = 'Voice Mail';
                    } else if ($sub['outcallduration'] != 0) {
                        $status = 'Answered';
                    } else if ($sub['route_id'] == 2 && $sub['outcallduration'] == 0) {
                        $status = 'Welcome Sound';
                    }
                    $file_path = "No recorded File";
                    if (!empty($sub['recordfilename'])) {
                        $path = str_replace("/var/www/html/callrecords", "", $sub['recordfilepath']);
                        $file_path = 'https://callrecords.callerdesk.io'.$path. $sub['recordfilename'] . '.wav';
                    }
                     $call_group = "Not Assigned";
                    if (!empty($sub['group_name'])) {
                        $call_group = $sub['group_name'];
                    } 
                     $key_pressed = '';
                     if (!empty($sub['key_pressed'])) {
                        $key_pressed = $sub['key_pressed'];
                      } 
                      $excel_data[$i] = array (
                                      'values' => 
                                      array (
                                        0 => 
                                        array (
                                          'userEnteredValue' => 
                                          array (
                                            'stringValue' => "$i",
                                          ),
                                        ),
                                        1 => 
                                        array (
                                          'userEnteredValue' => 
                                          array (
                                            'stringValue' => '+91-' . $sub['desk_phone'],
                                          ),
                                        ),
                                        2 => 
                                        array (
                                          'userEnteredValue' => 
                                          array (
                                            'stringValue' => $sub['call_to'],
                                          ),
                                        ),
                                        3 => 
                                        array (
                                          'userEnteredValue' => 
                                          array (
                                            'stringValue' => $sub['call_reciever'],
                                          ),
                                        ),
                                          4 => 
                                        array (
                                          'userEnteredValue' => 
                                          array (
                                            'stringValue' => $call_group,
                                          ),
                                        ),
                                           5 => 
                                        array (
                                          'userEnteredValue' => 
                                          array (
                                            'stringValue' => $sub['receiver_name'],
                                          ),
                                        ),
                                           6 => 
                                        array (
                                          'userEnteredValue' => 
                                          array (
                                            'stringValue' => $sub['call_date'],
                                          ),
                                        ),
                                           7 => 
                                        array (
                                          'userEnteredValue' => 
                                          array (
                                            'stringValue' => $sub['duration'],
                                          ),
                                        ),
                                           8 => 
                                        array (
                                          'userEnteredValue' => 
                                          array (
                                            'stringValue' => $status,
                                          ),
                                        ),
                                           9 => 
                                        array (
                                          'userEnteredValue' => 
                                          array (
                                            'stringValue' => $sub['circle'],
                                          ),
                                        ),
                                           10 => 
                                        array (
                                          'userEnteredValue' => 
                                          array (
                                            'stringValue' => $file_path,
                                          ),
                                        ),
                                             11 => 
                                        array (
                                          'userEnteredValue' => 
                                          array (
                                            'stringValue' => $routing,
                                          ),
                                        ),
                                             12 => 
                                        array (
                                          'userEnteredValue' => 
                                          array (
                                            'stringValue' => $key_pressed,
                                          ),
                                        ),
                                             13 => 
                                        array (
                                          'userEnteredValue' => 
                                          array (
                                            'stringValue' => $sub['incallcharges'],
                                          ),
                                        ),

                                      ),
                                    );
                    // $this->excel->setActiveSheetIndex(0)
                    //     ->setCellValue("A$x", $i)
                    //     ->setCellValue("B$x", '+91-' . $sub['desk_phone'])
                    //     ->setCellValue("C$x", $sub['call_to'])
                    //     ->setCellValue("D$x", $sub['call_reciever'])
                    //     ->setCellValue("E$x", $call_group)
                    //     ->setCellValue("F$x", $sub['receiver_name'])
                    //     ->setCellValue("G$x", $sub['call_date'])
                    //     ->setCellValue("H$x", $sub['duration'])
                    //     ->setCellValue("I$x", $status)
                    //                 ->setCellValue("J$x", $sub['circle'])
                    //     ->setCellValue("K$x", $file_path)
                    //     ->setCellValue("L$x", $routing)
                    //     ->setCellValue("M$x", $key_pressed)
                    //     ->setCellValue("N$x", $sub['incallcharges']);
                    $i++;
                }
            } 

		       $curlPost = array (
		              'properties' => 
		              array (
		                'title' => $spreadsheet_title,
		              ),
		              'sheets' => 
		              array (
		                0 => 
		                array (
		                  'data' => 
		                  array (
		                    0 => 
		                    array (
		                      'startRow' => 0,
		                      'startColumn' => 0,
		                      'rowData' => $excel_data, 
		                   ),
		                 ),
		                ),
		              ),
		            );
		    $ch = curl_init();      
		    curl_setopt($ch, CURLOPT_URL, 'https://sheets.googleapis.com/v4/spreadsheets');     
		    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);        
		    curl_setopt($ch, CURLOPT_POST, 1);      
		    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Bearer '. $access_token, 'Content-Type: application/json')); 
		    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($curlPost));   
		    $data = json_decode(curl_exec($ch), true);
		    $http_code = curl_getinfo($ch,CURLINFO_HTTP_CODE);      
		    if($http_code != 200) 
		        exit('Error : Failed to create spreadsheet');

		    return array('spreadsheet_id' => $data['spreadsheetId'], 'spreadsheet_url' => $data['spreadsheetUrl']);
		}
?>