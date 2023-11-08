<?php

$router->get('/', 'Http/controllers/index.php');
$router->get('/menu', 'Http/controllers/menu.php')->only('auth');
$router->get('/game', 'Http/controllers/game.php')->only('auth');
$router->get('/highscores', 'Http/controllers/highscores.php')->only('auth');

$router->get('/login', 'Http/controllers/users/login/create.php')->only('guest');
$router->post('/login', 'Http/controllers/users/login/store.php')->only('guest');
$router->delete('/login', 'Http/controllers/users/login/logout.php')->only('auth');

$router->get('/register', 'Http/controllers/users/register/create.php')->only('guest');
$router->post('/register', 'Http/controllers/users/register/store.php')->only('guest');

$router->get('/questions', 'api/questions.php')->only('auth');
$router->post('/questions', 'api/store.php')->only('auth');
$router->get('/end', 'Http/controllers/end.php')->only('auth');