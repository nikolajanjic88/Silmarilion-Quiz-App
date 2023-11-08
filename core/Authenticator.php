<?php

namespace core;
use core\Session;
use core\Database;

class Authenticator
{
  public function attempt($email, $password) 
  {
    $sql = "SELECT * FROM users WHERE email = ?";
    $res = (new Database())->query($sql, [$email])->find();

    if($res) {
      if(password_verify($password, $res['password'])) {
          $_SESSION['user'] = [
              'id' => $res['id'],
              'name' => $res['name']
          ];
          return true;
      }
    } 

    return false;
  }

  public function logout()
  {
    Session::destroy();
  }
}