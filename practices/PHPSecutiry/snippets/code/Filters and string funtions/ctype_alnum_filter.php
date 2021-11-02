<?php

/* Array of serial numbers. */
$serials = ['74ync8sjp', 'not a good serial'];

foreach ($serials as $serial)
{
  if (ctype_alnum($serial))
  {
    echo 'The serial "' . $serial . '" is good!<br>';
  }
  else
  {
    echo 'The serial "' . $serial . '" is NOT good!<br>';
  }
}
