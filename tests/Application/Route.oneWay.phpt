<?php

/**
 * Test: Route with OneWay
 *
 * @author     David Grudl
 * @category   Nette
 * @package    Nette\Application
 * @subpackage UnitTests
 */

require dirname(__FILE__) . '/../NetteTest/initialize.php';

require dirname(__FILE__) . '/Route.inc';

/*use Nette\Application\Route;*/


$route = new Route('<presenter>/<action>', array(
	'presenter' => 'Default',
	'action' => 'default',
), Route::ONE_WAY);


testRoute($route, '/presenter/action/');


__halt_compiler();

------EXPECT------
==> /presenter/action/

string(9) "Presenter"

array(2) {
	"action" => string(6) "action"
	"test" => string(9) "testvalue"
}

NULL
