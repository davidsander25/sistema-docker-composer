<?php

// Login
$routes->add('login', 'Login::index');
$routes->add('/logar', 'Login::Logar');
$routes->add('/sair-sistema', 'Login::logout');

// Produto
$routes->add('produto', 'Produto::index');
$routes->add('produto/cadastro', 'Produto::Cadastro');
$routes->add('produto/editar', 'Produto::Editar');
$routes->add('produto/deletar', 'Produto::Deletar');


// Usuario
$routes->add('usuario', 'Usuario::index');
$routes->add('usuario/cadastro', 'Usuario::Cadastro');
$routes->add('usuario/editar', 'Usuario::Editar');
$routes->add('usuario/deletar', 'Usuario::Deletar');



?>