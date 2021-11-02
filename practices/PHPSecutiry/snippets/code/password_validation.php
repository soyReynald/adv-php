<?php

/* 1: check that the "password" request element is set. */
if (!isset($_REQUEST['password']))
{
  echo 'Validation failed: "password" not set.';
  die();
}

$password = $_REQUEST['password'];

/* 2: check the password length. */
$passLength = mb_strlen($password);

if ($passLength < 8)
{
  echo 'Validation failed: password too short.';
  die();
}

if ($passLength > 16)
{
  echo 'Validation failed: password too long.';
  die();
}

/* 3: check for spaces at the beginning and ending. */
if (trim($password) !== $password)
{
  echo 'Validation failed: password has spaces at the beginning or ending.';
  die();
}

/* 4: check that the password contains both letters and numbers. */
if (ctype_alpha($password))
{
  echo 'Validation failed: the password does not contain numbers'.
  die();
}

if (ctype_digit($password))
{
  echo 'Validation failed: the password does not contain letters'.
  die();
}

/* 5: check that the password does not contain the username. */
if (mb_strpos($password, $username) !== FALSE)
{
  echo 'Validation failed: password contains the username.';
  die();
}
