<?php

namespace core;

class Validator
{
  public static function string($value)
  {
    $value = trim($value);
    return $value === '';
  }

  public static function email($email)
  {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
  }

  public static function confirmPassword($password, $rpassword) 
  {
    return $password === $rpassword;
  }

  public static function passwordLength($password)
  {
    return strlen($password) >= 6;
  }
}