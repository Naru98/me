<?php
// A sample PHP Script to POST data using cURL
// Data in JSON format
 
$data = array(
    'value1' => $_GET['value1'],
    'value2' => $_GET['value2'],
    'value3' => $_GET['value3'],
);
 
$payload = json_encode($data);
 
// Prepare new cURL resource
$ch = curl_init('https://maker.ifttt.com/trigger/Web/with/key/dryKvP2-LYkpsLUYvNPRbV');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLINFO_HEADER_OUT, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
 
// Set HTTP Header for POST request 
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($payload))
);
 
// Submit the POST request
$result = curl_exec($ch);
 
// Close cURL session handle
curl_close($ch);
 
?>