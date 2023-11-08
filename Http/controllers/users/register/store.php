<?php

use core\Session;
use core\Database;
use Http\Forms\RegisterForm;

$db = new Database();

$username = htmlspecialchars($_POST['username']);
$email = htmlspecialchars($_POST['email']);
$password = $_POST['password'];
$rpassword = $_POST['rpassword'];

$form = new RegisterForm();
if($form->validate($username, $email, $password, $rpassword))
{
    $password = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users (username, email, password) VALUES (:username, :email, :password)";
    $db->query($sql, ['username' => $username, 'email' => $email, 'password' => $password]);
    redirect('/login');
}

Session::flash('errors', $form->errors());
Session::flash('old', [
    'username' => $username,
    'email' => $email
]);

return redirect('register');