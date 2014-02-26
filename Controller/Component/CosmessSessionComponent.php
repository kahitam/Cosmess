<?php
/**
 * CosmessSessionComponent. Provides to Custome Sessions from the Controller layer
 */

App::uses('SessionComponent', 'Controller/Component');
App::uses('CakeSession', 'Model/Datasource');
App::uses('StrUtil', 'Cosmess.Lib');

class CosmessSessionComponent extends SessionComponent {

	public $controller = false;

	public $components = array('Session');

	public function __construct(ComponentCollection $collection, $settings) {
		parent::__construct($collection, $settings);
	}

	public function initialize(Controller $controller) {
		$this->Session = $this->CosmessSession;
	}

	public function startup(Controller $controller) {
		$this->controller = $controller;
	}

/**
 * Custome setFlash with parameters bootstrap / foundation
 *
 * @params['type'] : boolean for success / error class message
 */
	public function setFlash($message, $element = 'default', $params = array(), $key = 'flash') {
		$StrUtil = new StrUtil;
		$flashType = Configure::read('Cosmess.Params.flashType');
		if (!empty($flashType)) {
			switch ($flashType) {
				case 'foundation':
					$success = Configure::read('Cosmess.Class.foundation.success');
					$error = Configure::read('Cosmess.Class.foundation.error');
					break;
				case 'bootstrap':
					$success = Configure::read('Cosmess.Class.bootstrap.success');
					$error = Configure::read('Cosmes.Class.bootstrap.error');
					break;
				default:
					$success = 'success';
					$error = 'error';
					break;
			}
			if (isset($params['class'])) {
				$match = $StrUtil->findMatch($params['class']);
				switch ($match) {
					case 'success':
						$params['class'] = $success;
						break;
					case 'error':
						$params['class'] = $error;
						break;
				}
			} else {
				$params = $params;
			}
		} else {
			$params = $params;
		}
		unset($params['type']);
		CakeSession::write('Message.' . $key, compact('message', 'element', 'params'));
	}
}
