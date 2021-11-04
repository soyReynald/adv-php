<?php

/* Function to validate a string against a blacklist. */
function validateString(string $string): bool
{
  /* Blacklist of invalid characters. */
  $blacklist = array('&', '<', '>', '%', '@');
  
  foreach ($blacklist as $char)
  {
    if (mb_strpos($string, $char) !== FALSE)
    {
      /* If the invalid character is found, the function returns FALSE. */
      return FALSE;
    }
  }
  
  /* If no invalid characters are found inside the string, the function returns TRUE. */
  return TRUE;
}
