<?php

use core\Session;

view('login.view.php', [
  'errors' => Session::get('errors')
]);