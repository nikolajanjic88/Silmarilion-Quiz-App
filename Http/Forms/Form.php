<?php

namespace Http\Forms;

class Form 
{
  protected $errors = [];

  public function errors()
  {
    return $this->errors;
  }

  public function error($field, $message)
  {
    $this->errors[$field] = $message;
  }
}