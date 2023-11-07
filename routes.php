<?php

$router->get('/', 'index.php');
$router->get('/menu', 'menu.php')->only('auth');
$router->get('/game', 'game.php')->only('auth');
$router->get('/highscores', 'highscores.php')->only('auth');

$router->get('/login', 'users/login/index.php')->only('guest');
$router->post('/login', 'users/login/login.php')->only('guest');
$router->delete('/login', 'users/login/logout.php')->only('auth');

$router->get('/register', 'users/register/index.php')->only('guest');
$router->post('/register', 'users/register/store.php')->only('guest');

$router->get('/questions', 'api/questions.php')->only('auth');
$router->post('/questions', 'api/store.php')->only('auth');
$router->get('/end', 'end.php')->only('auth');