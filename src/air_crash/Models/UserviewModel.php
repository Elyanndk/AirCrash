<?php
namespace AirCrash\Models;

use Symfony\Component\HttpFoundation\Request;
use Silex\Application;



class UserviewModel
{
	public function signUp(array $aInfosUser)
	{
		$oBdd = new Connect();

		$sSql = 'INSERT INTO user (
						`email`,
						`password`,
						`lastname`,
						`firstname`,
						`birthDate`,
						`address`,
						`zipCode`,
						`city`,
						`country`,
						`phone`,
						`creationTimestamp`,
						`lastloginTimestamp`)
				VALUES (?,?,?,?,?,?,?,?,?,?,NOW(), NOW())';

		return $oBdd->executeSql($sSql, $aInfosUser);
		
	}
}
