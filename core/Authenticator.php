<?php

namespace core;
use core\Database;

class Authenticator
{
  public function attempt($email, $password) {
    $db = new Database();
    $sql = "SELECT * FROM users WHERE email = ?";
    $res = $db->query($sql, [$email])->find();

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
}