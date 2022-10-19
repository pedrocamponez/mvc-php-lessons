<?php
use core\Router;

$router = new Router(); //aqui esta a rota criada para o projeto

$router->get('/', 'HomeController@index'); //requisicao do tipo get para a rota

$router->get('/new', 'UsersController@add');
$router->post('/new', 'UsersController@addAction');

$router->get('/user/{id}/edit', 'UsersController@edit');
$router->post('/user/{id}/edit', 'UsersController@editAction');

$router->get('/user/{id}/delete', 'UsersController@del');
$router->post('/user/{id}/delete', 'UsersController@delAction');



//rotas de teste:
// $router->get('/fotos', 'HomeController@fotos');
// $router->get('/foto/{id}', 'HomeController@foto');

// $router->get('/sobre/{nome}', 'HomeController@sobreP');
// $router->get('/sobre', 'HomeController@sobre');