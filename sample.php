<?php

  $url = 'https://api.instapago.com/payment';
  $fields = array(
                    "KeyID" => "",
                    "PublicKeyId" => "",
                    "Amount" => "1",
                    "Description" => "",
                    "CardHolder" => "",
                    "CardHolderId" => "",
                    "CardNumber" => "",
                    "CVC" => "",
                    "ExpirationDate" => "",
                    "StatusId" => "",
                    "Address" => "",
                    "City" => "",
                    "ZipCode" => "",
                    "State" => ""
   );
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL,$url );
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($fields));
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $server_output = curl_exec ($ch);
  curl_close ($ch);
  echo $server_output;

?>
