<?php

/**
 * String Utils
 *
 */

class StrUtil extends Object {

/**
 * findMatch method
 * Finding match value of class setFlash message
 *
 */
	public function findMatch($value = null) {
		$types = Configure::read('Cosmess.types');
		foreach ($types as $type) {
			$match = preg_match('/'.$type.'/', $value);
			//if (preg_match('/'.$type.'/', $value) === true) {
			if ($match) {
				return $type;
			}
		}
	}
}
