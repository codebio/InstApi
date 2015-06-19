<?php

  $url = 'https://api.instapago.com/payment';
  $fields = array(
      "KeyID" => "",
      "PublicKeyId" => "",
      "Amount" => "1",
      "Description" => "Un cobro de prueba",
      "CardHolder" => "Lorem Ipsum",
      "CardHolderId" => "12345678",
      "CardNumber" => "8244001100110011",
      "CVC" => "123",
      "ExpirationDate" => "10/2015",
      "StatusId" => "1",
      "Address" => "Urb Lipsum",
      "City" => "Valencia",
      "ZipCode" => "2001",
      "State" => "Carabobo"
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
