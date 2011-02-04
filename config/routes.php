<?php
/**
 * Lithium: the most rad php framework
 *
 * @copyright     Copyright 2010, Union of RAD (http://union-of-rad.org)
 * @license       http://opensource.org/licenses/bsd-license.php The BSD License
 */

use lithium\net\http\Router;
use lithium\action\Response;

Router::connect('/', array(), function($request) {
	$location = array('controller' => 'pastes', 'action' => 'add');
	return new Response(compact('location'));
});
Router::connect('/add', array('controller' => 'pastes', 'action' => 'add'));
Router::connect('/add/{:args}', array('controller' => 'pastes', 'action' => 'add'));
Router::connect('/edit/{:args}', array('controller' => 'pastes', 'action' => 'edit'));
Router::connect('/view/{:args}', array('controller' => 'pastes', 'action' => 'view'));
Router::connect('/latest', array('controller' => 'pastes', 'action' => 'index'));
Router::connect('/{:controller}/{:action}/{:args}');

?>