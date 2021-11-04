<?php

/* Some usernames to test. */
$usernames = array('User 1', 'Alex', 'root', 'my user', 'admin', 'David Tennant');

/* Check each username. */
foreach ($usernames as $user)
{
  if (validUser($user))
  {
    echo '"' . $user . '" is a valid username<br>';
  }
  else
  {
    echo '"' . $user . '" is NOT a valid username<br>';
  }
}


/* Blacklist validation function. */
function validUser(string $user): bool
{
  /* The actual Blacklist: an array of invalid usernames. */
  $blacklist = array ('root', 'admin');
  
  /* Check that the username is not in the blacklist. */
  if (in_array($user, $blacklist, TRUE))
  {
    return FALSE;
  }
  
  return TRUE;
}
