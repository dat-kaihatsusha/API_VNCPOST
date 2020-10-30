<?php
require_once 'HTTP/Request2.php';
$request = new HTTP_Request2();
$request->setUrl('http://api.v3.vncpost.com/User/Login');
$request->setMethod(HTTP_Request2::METHOD_POST);
$request->setConfig(array(
  'follow_redirects' => TRUE
));
$request->setHeader(array(
  'Authorization' => 'Bearer',
  'Content-Type' => 'application/json',
  'Cookie' => '.AspNetCore.Identity.Application=CfDJ8CrTI7mN1dZOtozldFYtu1hSGpZvQPzUozggb68QyRHq6JhcUFW1kpXlKw9sYVN32_zWyVCjZfkrlO6Skv9Efqyh3Db25jTnu0ok-FJExssOCFOFi1WKR7FBjI1Nrgzz3HH5DmAzrNvofESLevgeGN-XKPfKSrBmNTswryeslb_axZBRTmIYYfVBbGz3evUgpVAgcy-JRO-hKfs5iuPzw6gVs0wSvlPC0Cm-4iZcTAsWm-4wCbARt9TWsShf9pfBATCR2Nb47pXXP1sZnGN8-6cUHWyT3mr50GgucHd8P7E9wO8M13Mcgf8k6vZVNicEVrE1HZzentcsqgqRCV9xAOnL1AyOn1IAMlJdRaC9kc-87fZauSR3-d395kch1fRtFUTfWiW99gnv0wSALTbOVNrwpaFtU_CCg7vjUZS44ol7uWW_4zLbR__jYJxNOS9H27WuQ8zatRUenANW2wo4_PgOm-NZSB-tntGZI7u-PFrgOjYR46ecdHgwFt3CErbK_bSONFZddq3i4jq92ft11MoD_K_1NUmSb1QcSiVprf8v'
));
$request->setBody('{ 
\n          "Username":"FCBacNinh", 
\n          "Password":"FCBacNinh123"
\n}');
try {
  $response = $request->send();
  if ($response->getStatus() == 200) {
    echo $response->getBody();
  }
  else {
    echo 'Unexpected HTTP status: ' . $response->getStatus() . ' ' .
    $response->getReasonPhrase();
  }
}
catch(HTTP_Request2_Exception $e) {
  echo 'Error: ' . $e->getMessage();
}