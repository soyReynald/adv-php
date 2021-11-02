<?php

/*
 * Generic validation function for request elements as float numbers.
 * Parameters:
 *
 * $requestKey: the name of the request element.
 * $min: minimum value (optional).
 * $max: maximum value (optional).
*/

function validateFloat(string $requestKey, float $min = NULL, float $max = NULL): bool
{
  /* Check that the request element is set. */
  if (!isset($_REQUEST[$requestKey]))
  {
    return FALSE;
  }
  
  $val = $_REQUEST[$requestKey];
  
  /* Type checking: check that it's a valid float. */
  if (!is_numeric($val))
  {
    return FALSE;
  }
  
  /* Limit checking. If max or min are NULL, the check is skipped. */
  if (!is_null($min))
  {
    if ($val < $min)
    {
      return FALSE;
    }
  }
  
  if (!is_null($max))
  {
    if ($val > $max)
    {
      return FALSE;
    }
  }
  
  /* If everything is ok, return the value as PHP float. */
  return floatval($val);
}
