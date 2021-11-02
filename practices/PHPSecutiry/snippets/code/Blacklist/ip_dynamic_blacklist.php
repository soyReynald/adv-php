<?php

/* List of failed login attempts. */
$failedLogins = array();

/* Blacklist of IP addresses that failed 3 times in an hour. */
$blacklist = array();

/* Read the user's IP address. */
$ip = $_SERVER['REMOTE_ADDR'];


/* The variable $loginFailed is TRUE if the remote user has failed a login attempt. */
if ($loginFailed)
{	
  /* Add the IP to the failed login list. */
  /* First, create the array key with the IP address if it doesn't exist. */
  if (!isset($failedLogins[$ip]))
  {
    $failedLogins[$ip] = array();
  }
  
  /* Then, add the current failed login timestamp. */
  $failedLogins[$ip][] = time();
  
  /* Now, check if the same IP has failed 3 times. */
  if (count($failedLogins[$ip]) == 3)
  {
    /* If there are 3 failed attempts, check when the first attempt happened. */
    $timeDiff = (time() - $failedLogins[$ip][0]);
    
    /* If the time difference is less than 1 hour, add the IP address to the blacklist. */
    if ($timeDiff < 3600)
    {
      $blacklist[$ip] = time();
    }
    
    /* Now, we remove the oldest login attempt from the failed login list. */
    array_shift($failedLogins);
  }
}
else
{
  /* Here, we check if the user's IP address is in the blacklist.
     If it's there, we check how much time has passed since the IP has been put in the blacklist.
     If more than 2 hours have passed, we can "free" the IP address. Otherwise, the login attempt is rejected.
  */
  if (array_key_exists($ip, $blacklist))
  {
    $timeDiff = (time() - $blacklist[$ip]);
    
    if ($timeDiff < 7200)
    {
      /* Less than 2 hours have passed. Login attempt rejected. */
      $loginFailed = TRUE;
    }
    else
    {
      /* More than 2 hours have passed. We remove the IP address from the blacklist. */
      unset($blacklist[$ip]);
    }
  }
}
