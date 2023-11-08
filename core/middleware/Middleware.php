<?php

namespace core\middleware;

class Middleware 
{

  public const MAP = [
    'guest' => Guest::class,
    'auth' => Auth::class
  ];
}