<?php
/**
 * CosmessComponent. Provides to Custome Sessions from the Controller layer
 */

App::uses('Component', 'Controller');
App::uses('CakeSession', 'Model/Datasource');

class CosmessComponent extends Component {

	public $controller = false;

	public function startup(Controller $controller) {
		$this->controller = $controller;
	}

/**
 * Custome setFlash with parameters bootstrap / foundation
 */
	public function setFlash($message, $element = 'default', $params = array(), $key = 'flash') {
		$_params = array(
			'type' => 'true',
		);
		$params = Set::merge($_params, $params);

		if (!isset($params['class'])) {
			$flashType = Configure::read('Cosmess.Params.flashType');
			if (!empty($flashType)) {
				switch ($flashType) {
					case 'foundation':
						$success = Configure::read('Cosmess.Class.foundation.success');
						$error = Configure::read('Cosmess.Class.foundation.error');
						break;
					case 'bootstrap':
						$success = Configure::read('Cosmess.Class.boostrap.success');
						$error = Configure::read('Cosmes.Class.bootstrap.error');
						break;
					default:
						$success = 'success';
						$error = 'error';
						break;
				}
			}
			if ($params['type']) {
				$params['class'] = $success;
			} else {
				$params['class'] = $error;
			}
			unset($params['type']);
			CakeSession::write('Message.' . $key, compact('message', 'element', 'params'));
		}
	}
}
