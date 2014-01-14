<?php

class CosmessActivation {

	public function beforeActivation(&$controller) {
		return true;
	}

	public function onActivation(&$controller) {
		// ACL: set ACOs with permissions

		$controller->Setting->write('Cosmess.Params.flashType', '', array('editable' => 1, 'title' => 'Flash Type'));
		$controller->Setting->write('Cosmess.Class.foundation.success', 'alert-box success', array('editable' => 1, 'title' => 'Class Foundation Success'));
		$controller->Setting->write('Cosmess.Class.foundation.error', 'alert-box alert', array('editable' => 1, 'title' => 'Class Foundation Error'));
		$controller->Setting->write('Cosmess.Class.bootstrap.success', 'alert alert-success', array('editable' => 1, 'title' => 'Class Bootstrap Success'));
		$controller->Setting->write('Cosmess.Class.bootstrap.error', 'alert alert-danger', array('editable' => 1, 'title' => 'Class Bootstrap Error'));
	}

	public function beforeDeactivation(&$controller) {
		return true;
	}

	public function onDeactivation(&$controller) {
		$controller->Setting->deleteKey('Cosmess.Params.flashType');
		$controller->Setting->deleteKey('Cosmess.Class.foundation.success');
		$controller->Setting->deleteKey('Cosmess.Class.foundation.error');
		$controller->Setting->deleteKey('Cosmess.Class.bootstrap.success');
		$controller->Setting->deleteKey('Cosmess.Class.bootstrap.error');
	}
}
