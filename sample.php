<?php

  $url = 'https://api.instapago.com/payment';
  $fields = array(
      "KeyID" => "1A21FE00-A9D7-41F9-A8FF-1F50605A0933",
      "PublicKeyId" => "e9a5893e047b645fed12c82db877e05a",
      "Amount" => "1",
      "Description" => "Un cobro de prueba",
      "CardHolder" => "Lorem Ipsum",
      "CardHolderId" => "12345678",
      "CardNumber" => "8244001100110011",
      "CVC" => "123",
      "ExpirationDate" => "10/2015",
      "StatusId" => "1",
      "IP" => "192.168.30.10",
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
