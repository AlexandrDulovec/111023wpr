<?php

declare(strict_types=1);

namespace App\Router;

use Nette;
use Nette\Application\Routers\RouteList;


final class RouterFactory
{
	use Nette\StaticClass;

	public static function createRouter(): RouteList
	{
		$router = new RouteList;
		$router->addRoute('<module>/<presenter>/<action>[/<id>]', 'Homepage:default');
		return $router;
	}


	protected function buildAdmin (): Routelist
	 {

		$router[] = $list = new RouteList(Admin)
		$list[] = new Route ('admin/<presenter>/<action>[/<id>]', 'Home:default')
		

	}


	protected function buildFront (): Routelist
	 {

		$router[] = $list = new RouteList(Admin)
		$list[] = new Route ('admin/<presenter>/<action>[/<id>]', 'Home:default')
		

	}

	protected function buildFront {


	}
}
