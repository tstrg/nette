<?php

/**
 * Test: Route with DashInParameter
 *
 * @author     David Grudl
 * @category   Nette
 * @package    Nette\Application
 * @subpackage UnitTests
 */

require dirname(__FILE__) . '/../NetteTest/initialize.php';

require dirname(__FILE__) . '/Route.inc';

/*use Nette\Application\Route;*/


$route = new Route('<para-meter>', array(
	'presenter' => 'Presenter',
));


testRoute($route, '/any');


__halt_compiler();

------EXPECT------
==> /any

string(9) "Presenter"

array(2) {
	"para-meter" => string(3) "any"
	"test" => string(9) "testvalue"
}

string(19) "/any?test=testvalue"
