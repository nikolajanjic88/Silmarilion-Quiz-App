<?php

namespace Http\Forms;
use core\Validator;

class LoginForm 
{
  protected $errors = [];

  public function validate($email, $password)
  {
    if(Validator::string($email)) $this->errors['email'] = 'Email required';
    if(Validator::string($password)) $this->errors['password'] = 'Password required';

    return empty($this->errors);
  }

  public function errors()
  {
    return $this->errors;
  }
  
}