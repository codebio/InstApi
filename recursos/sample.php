<?php

/*
 * Filename: sample.php
 * Description: Ejemplo para consumo de la API de instapago
 * @author Personal de Instapago
 * @version 1.5.4
 */

$url = 'https://api.instapago.com/payment';
$fields = array(
    "KeyID"             => "", //requerido
    "PublicKeyId"       => "", //requerido
    "Amount"            => "1", //requerido
    "Description"       => "Un cobro de prueba", //requerido
    "CardHolder"        => "Lorem Ipsum", //requerido
    "CardHolderId"      => "12345678", //requerido
    "CardNumber"        => "8244001100110011", //requerido
    "CVC"               => "123", //requerido
    "ExpirationDate"    => "10/2015", //requerido
    "StatusId"          => "1", //requerido
    "IP"                => "192.168.30.10", //requerido
    "Address"           => "Urb Lipsum",
    "City"              => "Valencia",
    "ZipCode"           => "2001",
    "State"             => "Carabobo"
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
