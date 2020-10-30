<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://api.v3.vncpost.com/Order/Add",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS =>"{ \r\n   \"Code\":\"12334565342\", \r\n    \"ProductName\":\"BanhKeo\",\r\n    \"CollectAmount\":\"20000\",\r\n    \"JourneyType\":\"1\",\r\n    \"Serviceld\":\"12409\",\r\n    \"Weight\":\"120\",\r\n    \"Width\":\"130\",\r\n    \"Height\":\"130\",\r\n    \"Lenght\":\"140\",\r\n    \"Note\":\"Giao Nhanh\",\r\n    \"SourceCity\":\"Hà Nội\",\r\n    \"SourceDistrict\":\"Quận Cầu Giấy\",\r\n    \"SourceWard\":\"Phường Dịch Vọng\",\r\n    \"SourceAddress\":\"247 Cầu Giấy\",\r\n    \"SourceName\":\"Ngô Văn Thuận\",\r\n    \"SourcePhoneNumber\":\"0969690331\",\r\n    \"DestCity\":\"Ninh Bình\",\r\n    \"DestDistrict\":\"Hoa Lư\",\r\n    \"DestWard\":\"Phuowngf2 \",\r\n    \"DestAddress\":\"247 Phường 2\",\r\n    \"DestName\":\"Vũ Văn Liên\",\r\n    \"DestPhoneNumber\":\"09324324324\"\r\n}",
  CURLOPT_HTTPHEADER => array(
    "Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VySWQiOiIxNDM1MyIsImV4cCI6MTYwMjk1MDQxMywiaXNzIjoiaHR0cDovL2FwaS52bmNwb3N0LmNvbSIsImF1ZCI6Imh0dHA6Ly9hcGkudm5jcG9zdC5jb20ifQ.VkVDBkyoYsbWszdIimY99BJ1MFZJTE3dcOTDceBmni8",
    "Content-Type: application/json",
    "Cookie: .AspNetCore.Identity.Application=CfDJ8CrTI7mN1dZOtozldFYtu1jht1DReAiptFpcNMv6ItVxme_lKoTlR3Nwj27ZXpw8IsdAA7JV_GdW7-8aUb46sZzkJYOxuIX8PDYv5em-_9BDs2Ps5Jj7gflXzF8UooUGWbQHcNAUDylQIZoosHIfQzpMtwG5hp-kf1r4vENKaPNQova2VY-Y9E17lGlMk8ZPLKqt5zDlTZTQKbD56weoR2NAXeQ_xz-z4z9zO9siagIGXPeto9KGuQeB40aaMy_T2ohrX1OUrmjqeCX3wNVh_XfV_PooW0eWNaAlmCbx_5adLrcwTJLzVhNwtyLPvHoDh6tkpyhHrrvTY0oke11mAA8DDsUBlbmt5S5niyj_GiOSmsgVVYvkLie4Pc4J7p3X02PXRFXGYojufy5PtUmaooX-RBE7p1ehBg_0vEpVAxyvWQcub0hvu2Loe5QmoogHODs7uqHKDT_yqLWzlw6SdDmQ35ZVZFVEjGyqViopPle3aZwGDOqzMK66bNYy0wdOBuWGUo_IPl9Ea0hw6Rsl_yQZyKYgd2CCUZEi5I4_d-Ot"
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;


