<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

//produtos REST
$routes->get('produtos','ProdutosController::list');
$routes->post('produtos/create','ProdutosController::create');
$routes->put('produtos/(:segment)','ProdutosController::update/$1');
$routes->patch('produtos/(:segment)',    'ProdutosController::update/$1');
//$routes->put('produtos/(:segment)','ProdutosController::update/$1'); // Rota para atualizar um produto específico pelo ID
