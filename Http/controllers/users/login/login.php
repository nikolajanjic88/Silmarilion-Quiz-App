<?php

use Http\Forms\LoginForm;
use core\Authenticator;

$title = 'Login';

$email = $_POST['email'];
$password = $_POST['password'];

$form = new LoginForm();
if(!$form->validate($email, $password)) {
    return view('login.view.php', [
        'title' => $title,
        'errors' => $form->errors()
    ]);    
}

$auth = new Authenticator();
if($auth->attempt($email, $password)) {
    header('location: /menu');
    die();
} 

return view('login.view.php', [
    'title' => $title,
    'errors' => [
        'email' => 'No matching account found for that email and password'
    ]
]);
