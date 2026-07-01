<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');

/**Dashboard*/
$routes->get('dashboard', 'Dashboard::index');

/** Cidade Routes */
$routes->get('/cidade', 'CidadeController::index');
$routes->get('/cidade/novo', 'CidadeController::novo');
$routes->post('/cidade/salvar', 'CidadeController::salvar');
$routes->get('/cidade/editar/(:num)', 'CidadeController::editar/$1');
$routes->post('/cidade/atualizar/(:num)', 'CidadeController::atualizar/$1');
$routes->get('/cidade/excluir/(:num)', 'CidadeController::excluir/$1');

// Expositor
$routes->get('expositor', 'ExpositorController::index');
$routes->get('expositor/novo', 'ExpositorController::novo');
$routes->post('expositor/salvar', 'ExpositorController::salvar');
$routes->get('expositor/editar/(:num)', 'ExpositorController::editar/$1');
$routes->post('expositor/atualizar/(:num)', 'ExpositorController::atualizar/$1');
$routes->get('expositor/excluir/(:num)', 'ExpositorController::excluir/$1');

// Visita
$routes->get('visita', 'VisitaController::index');
$routes->get('visita/novo', 'VisitaController::novo');
$routes->post('visita/salvar', 'VisitaController::salvar');
$routes->get('visita/editar/(:num)', 'VisitaController::editar/$1');
$routes->post('visita/atualizar/(:num)', 'VisitaController::atualizar/$1');
$routes->get('visita/excluir/(:num)', 'VisitaController::excluir/$1');

// Pessoa
$routes->get('pessoa', 'PessoaController::index');
$routes->get('pessoa/novo', 'PessoaController::novo');
$routes->post('pessoa/salvar', 'PessoaController::salvar');
$routes->get('pessoa/editar/(:num)', 'PessoaController::editar/$1');
$routes->post('pessoa/atualizar/(:num)', 'PessoaController::atualizar/$1');
$routes->get('pessoa/excluir/(:num)', 'PessoaController::excluir/$1');
