<?php
/**
 * Dans ce fichier je vais gérer mes différentes routes
 */



//  Création d’une route
// ->get correspond à un appel HTTP en method GET
// ici “/” correspond à la page d’accueil (index.php) 
// et donc à l’url
// AirCrash\controllers\Homepage correspond à 
// la classe (controller) visée
// httpGetMethod est la méthode qui sera appelée
$app->get('/', 'AirCrash\Controllers\Homepage::showPage')
// bind permet de nommer cette route et vous permettra de générer l’url depuis ce nom
->bind('home');



$app->get('/userview', 'AirCrash\Controllers\Userview::showForm')
->bind('userview');
$app->post('/userview', 'AirCrash\Controllers\Userview::submitForm'); 
$app->get('/contact', 'AirCrash\Controllers\Contact::showForm')
->bind('contact');
$app->post('/contact', 'AirCrash\Controllers\Contact::submitForm');

$app->get('/login', 'AirCrash\Controllers\LoginController::showForm')
->bind('login');

$app->post('/login', 'AirCrash\Controllers\LoginController::onSubmitForm');