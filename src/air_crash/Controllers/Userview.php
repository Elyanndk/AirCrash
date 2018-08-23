<?php
namespace AirCrash\Controllers;

use Symfony\Component\HttpFoundation\Request;
use Silex\Application;
use AirCrash\Models\UserviewModel;

class Userview
{
	public function showForm(Application $app)
	{
		return $app['twig']->render('userview.twig');
	}

	public function submitForm(Request $request, Application $app)
	{

		$oUserview = new UserviewModel();
		$iIdUserview = [
			$request->get('email'),
			$request->get('password'),
			$request->get('lastname'),
			$request->get('firstname'),
			$request->get('birthDate'),
			$request->get('address'),
			$request->get('zipCode'),
			$request->get('city'),
			$request->get('country'),
			$request->get('phone')
		];

		$oUserview->signUp($iIdUserview);

		return $app->redirect($app['url_generator']->generate('home'));

		// return $app['twig']->render('userview.twig',
		// 	[
		// 		'email' 	=> $request->get('email'),
		// 		'password'  => $request->get('password'),
		// 		'lastname'  => $request->get('lastname'),
		// 		'firstname' => $request->get('firstname'),
		// 		'birthDate' => $request->get('birthDate'),
		// 		'address'   => $request->get('address'),
		// 		'zipCode'   => $request->get('zipCode'),
		// 		'city' 		=> $request->get('city'),
		// 		'country' 	=> $request->get('country'),
		// 		'phone' 	=> $request->get('phone')

		// 	]
		// );
	}
}