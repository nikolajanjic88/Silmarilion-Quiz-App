<?php

use Http\Forms\LoginForm;
use core\Authenticator;
use core\Session;

$email = $_POST['email'];
$password = $_POST['password'];

$form = new LoginForm();
if($form->validate($email, $password)) {
    if((new Authenticator())->attempt($email, $password)) {
        redirect('/menu');
    } 

    $form->error('email', 'No matching account found for that email and password');
}

Session::flash('errors', $form->errors());
Session::flash('old', [
    'email' => $email
]);

return redirect('login');
