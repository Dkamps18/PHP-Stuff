<?php
// GET
$ch = curl_init();
curl_setopt_array($ch, array(
	CURLOPT_HTTPHEADER => array(),
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_URL => ''
));
$response = curl_exec($ch);
curl_close($ch);

// POST
$ch = curl_init();
curl_setopt_array($ch, array(
	CURLOPT_HTTPHEADER => array(
		'Content-Type: application/json'
	),
	CURLOPT_POST => true,
	CURLOPT_POSTFIELDS => '',
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_URL => ''
));
$response = curl_exec($ch);
curl_close($ch);
