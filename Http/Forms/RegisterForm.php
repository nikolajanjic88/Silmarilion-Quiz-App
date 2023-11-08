<?php

namespace Http\Forms;

use core\Database;
use core\Validator;
use Http\Forms\Form;

class RegisterForm extends Form
{
  
  public function validate($username, $email, $password, $rpassword)
  {
    if(!Validator::email($email)) $this->errors['email'] = 'Invalid email';
    if(!Validator::confirmPassword($password, $rpassword)) $this->errors['password'] = 'Passwords are not matching';
    if(!Validator::passwordLength($password)) $this->errors['password'] = 'Password must have at least 5 characters';
    if(Validator::string($username)) $this->errors['username'] = 'Username required';
    if(Validator::string($email)) $this->errors['email'] = 'Email required';
    if(Validator::string($password)) $this->errors['password'] = 'Password required';

    $sql = "SELECT email FROM users WHERE email = ?";
    $res = (new Database())->query($sql, [$email])->find();
    if($res) $this->errors['email'] = 'User already exists';

    $sql = "SELECT username FROM users WHERE username = ?";
    $res = (new Database())->query($sql, [$username])->find();
    if($res) $this->errors['username'] = 'Username taken';
    
    return empty($this->errors);
  }
  
}