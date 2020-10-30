<?php

$curl = curl_init();

public function getTokenVncpost()
    {
        $curl = curl_init();

		curl_setopt_array($curl, array(
		CURLOPT_URL => "http://api.v3.vncpost.com/User/Login",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 0,
		  CURLOPT_FOLLOWLOCATION => true,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "POST",
		  CURLOPT_POSTFIELDS =>"{ \r\n          \"Username\":\"FCBacNinh\", \r\n          \"Password\":\"FCBacNinh123\"\r\n}",
		  CURLOPT_HTTPHEADER => array(
		    "Content-Type: application/json"
		  ),

		));

		    $response = curl_exec($curl);

            $err = curl_error($curl);

			curl_close($curl);

			if ($err) {
			    return "cURL Error #:" . $err;
			} else {
			    return $response;
		    }

    }   


curl_setopt_array($curl, array(
  CURLOPT_URL => "http://track.v3.vncpost.com/Print/PrintWayBill",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS =>"{\r\n     \"codes\": [\"84855004051302\",\"84855004051302\"]\r\n}",
  CURLOPT_HTTPHEADER => array(
    "Content-Type: application/json"
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;