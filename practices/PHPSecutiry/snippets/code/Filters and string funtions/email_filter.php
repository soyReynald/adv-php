<?php

/* Email addresses to check. */
$emails = ['valid_address@mydomain.com', 'fake@email@address.com'];

foreach ($emails as $email)
{
  /* filter_var() with the FILTER_VALIDATE_EMAIL flag. */
  if (filter_var($email, FILTER_VALIDATE_EMAIL))
  {
    echo $email . ' is a valid address!<br>';
  }
  else
  {
    echo $email . ' is NOT a valid address!<br>';
  }
}
