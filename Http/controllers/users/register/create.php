<?php

use core\Session;

view('register.view.php', [
  'errors' => Session::get('errors')
]);