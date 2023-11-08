<?php

namespace Http\Forms;
use core\Validator;
use Http\Forms\Form;

class LoginForm extends Form
{
  
  public function validate($email, $password)
  {
    if(Validator::string($email)) $this->errors['email'] = 'Email required';
    if(Validator::string($password)) $this->errors['password'] = 'Password required';

    return empty($this->errors);
  }
  
}