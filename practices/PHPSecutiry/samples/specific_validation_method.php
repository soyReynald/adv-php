<?php

class Account
{
  /* This variable contains the logged-in username. */
  private $username;
  
  /* Your specific password validation function */
  private function isPasswordValid(string $password, string $username): bool
  {
    /* Check the password length. */
    $passLength = mb_strlen($password);
    
    if ($passLength < 8)
    {
      return FALSE;
    }
    
    if ($passLength > 16)
    {
      return FALSE;
    }
    
    /* Check for spaces at the beginning and ending. */
    if (trim($password) !== $password)
    {
      return FALSE;
    }
    
    /* Check that the password contains both letters and numbers. */
    if (ctype_alpha($password))
    {
      return FALSE;
    }
    
    if (ctype_digit($password))
    {
      return FALSE;
    }
    
    /* Check that the password does not contain the username. */
    if (mb_strpos($password, $username) !== FALSE)
    {
      return FALSE;
    }
    
    /* If everything is ok, return true. */
    return TRUE;
  }
  
  
  /* Add a new account. */
  public function addNewAccount(string $username, string $password)
  {
    /* Check if the password is valid */
    if (!$this->isPasswordValid($password, $username))
    {
      /* Throw some error */
    }
    
    /* ... */
  }
  
  
  /* Change the password of the currently logged-in account. */
  public function changeAccountPassword(string $newPassword)
  {
    /* Check if the password is valid */
    if (!$this->isPasswordValid($newPassword, $this->username))
    {
      /* Throw some error */
    }
    
    /* ... */
  }
}
