<?php

/* As usual, check that the "json" request string element exists. */
if (!isset($_REQUEST['json']))
{
  echo 'json element not set!';
  die();
}

/* Read the json packet from the request string. */
$json = $_REQUEST['json'];

/* Decode the json packet with json_decode() into the $jsonObj variable. */
$jsonObj = json_decode($json);

/* If $json is not a valid JSON packet, $jsonObj is set to NULL. */
if (is_null($jsonObj))
{
  echo 'Not a valid JSON packet!';
  die();
}
