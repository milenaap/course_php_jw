<?php

// Rutas pricipales
$router->get('/', 'index.php');
$router->get('/about', 'about.php');
$router->get('/contact', 'contact.php');

// Notes
$router->get('/notes', 'notes/index.php')->only('auth');            // Es para cargar las view de lista de las notas
$router->get('/note','notes/show.php');                             // Es para cargar la view de la nota
$router->delete('/note', 'notes/destroy.php');                      // Es para eliminar la nota


$router->get('/note/edit', 'notes/edit.php');                       // Es la vista para editar la nota
$router->patch('/note','notes/update.php');                         // Es para actualizar la nota

// Notes
$router->get('/notes/create', 'notes/create.php');                  // Es para cargar la vista de la nota
$router->post('/notes', 'notes/store.php');                         // Es para guardar la nota

// Register
$router->get('/register', 'registration/create.php')->only('guest'); 
$router->post('/register', 'registration/store.php')->only('guest');                

// Login
$router->get('/login', 'sessions/create.php')->only('guest');              
$router->post('/sessions', 'sessions/store.php')->only('guest');              
$router->delete('/sessions', 'sessions/destroy.php')->only('auth');              