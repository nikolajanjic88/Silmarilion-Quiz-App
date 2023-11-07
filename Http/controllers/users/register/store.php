<?php

use core\Database;
use core\Validator;

$title = 'Register';

$db = new Database();

$username = htmlspecialchars($_POST['username']);
$email = htmlspecialchars($_POST['email']);
$password = $_POST['password'];
$rpassword = $_POST['rpassword'];
$errors = [];

//validation
if(!Validator::email($email)) $errors['email'] = 'Invalid email';
if(!Validator::confirmPassword($password, $rpassword)) $errors['password'] = 'Passwords are not matching';
if(!Validator::passwordLength($password)) $errors['password'] = 'Password must have at least 5 characters';
if(Validator::string($username)) $errors['username'] = 'Username required';
if(Validator::string($email)) $errors['email'] = 'Email required';
if(Validator::string($password)) $errors['password'] = 'Password required';


//check if user exists
$sql = "SELECT username, email FROM users WHERE email = ?";
$res = $db->query($sql, [$email])->find();
if($res) {
    $errors['email'] = 'User already exists';
}

//check if username is taken
$sql = "SELECT username, username FROM users WHERE username = ?";
$res = $db->query($sql, [$username])->find();
if($res) {
    $errors['username'] = 'Username taken';
}


if(!empty($errors)) {
    view('register.view.php', [
        'title' => $title,
        'errors' => $errors
    ]);
} else {
    $password = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users (username, email, password) VALUES (:username, :email, :password)";
    $db->query($sql, ['username' => $username, 'email' => $email, 'password' => $password]);
    header('location: /login');
    die();
}