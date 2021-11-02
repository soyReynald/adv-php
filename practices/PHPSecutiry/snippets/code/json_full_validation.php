<?php

/* The JSON packet. */
$json = 

'
{
  "account_id": 2,
  "name": "Jean-Luc",
  "age": 35,
  "address": null,
  "grants": [
    {
      "level": "admin",
      "access": false
    },
    {
      "level": "manager",
      "access": true
    }
  ]
}
';


/* Decode into a PHP array. */
$jsonArray = json_decode($json, TRUE);

/* Check that it's a valid JSON packet. */
if (is_null($jsonArray))
{
  echo 'Invalid JSON.';
  die();
}


/* Check that the "account_id" element is set. */
if (!isset($jsonArray['account_id']))
{
  echo 'Account ID not set.';
  die();
}

/* Check that the account id is a valid integer. */
if (filter_var($jsonArray['account_id'], FILTER_VALIDATE_INT) === FALSE)
{
  echo 'Account ID not valid.';
  die();
}

/* Check that the account id is between 1 and 65535. */
if (($jsonArray['account_id'] < 1) || ($jsonArray['account_id'] > 65535))
{
  echo 'Account ID not valid.';
  die();
}


/* Check that the "name" element is set. */
if (!isset($jsonArray['name']))
{
  echo 'Name not set.';
  die();
}

/* Get the name length. */
$nameLength = mb_strlen($jsonArray['name']);

/* Check the name length. */
if (($nameLength < 1) || ($nameLength > 80))
{
  echo 'Name length not valid.';
  die();
}


/* Check that the "age" element is set. */
if (!isset($jsonArray['age']))
{
  echo 'Age not set.';
  die();
}

/* Check that $age is a valid integer. */
if (filter_var($jsonArray['age'], FILTER_VALIDATE_INT) === FALSE)
{
  echo 'Age not valid.';
  die();
}

/* Check that the age is between 1 and 120. */
if (($jsonArray['age'] < 1) || ($jsonArray['age'] > 120))
{
  echo 'Age not valid.';
  die();
}


/* Check that the "address" element is set.
   Note that you need to use array_key_exists here. */
if (!array_key_exists('address', $jsonArray))
{
  echo 'Address not set.';
  die();
}

/* If the address is not NULL, it must be valid. */
if (!is_null($jsonArray['address']))
{
  /* Get the address length. */
  $addressLength = mb_strlen($jsonArray['address']);
  
  /* Check the address length. */
  if (($addressLength < 1) || ($addressLength > 128))
  {
    echo 'Address length not valid.';
    die();
  }
}


/* Check that the "grants" element is set. */
if (!isset($jsonArray['grants']))
{
  echo 'Grants not set.';
  die();
}

/* Check that the grants element is an array. */
if (!is_array($jsonArray['grants']))
{
  echo 'Invalid grants.';
  die();
}

/* Now we check each grants element. */
foreach ($jsonArray['grants'] as $grant)
{
  /* Check that each grant is an array itself. */
  if (!is_array($grant))
  {
    echo 'Invalid grant.';
    die();
  }
  
  /* Check that the "level" element is set. */
  if (!isset($grant['level']))
  {
    echo 'Grant Level not set.';
    die();
  }
  
  /* Get the level string length. */
  $levelLength = mb_strlen($jsonArray['name']);
  
  /* Check the level length. */
  if (($levelLength < 1) || ($levelLength > 80))
  {
    echo 'Grant Level length not valid.';
    die();
  }
  
  /* Check that the "access" element is set. */
  if (!isset($grant['access']))
  {
    echo 'Grant Access not set.';
    die();
  }
  
  /* Check that the access element is a boolean. */
  if (!is_bool($grant['access']))
  {
    echo 'Grant Access not valid.';
    die();
  }
}

/* If we are here, the JSON passed all the checks. */
echo "The JSON is OK!";
