Costume Session Message
-----------------------

I created this plugin to easily change the style of the message session

This plugin just configuration for costume session messages according to what we use in Foundation or Bootstrap CSS style.

Requirements
------------
- CakePHP > 2.x

Config:
-------
Change config `Cosmess.Params.flashType` for 'foundation' or 'bootstrap'

if not, leave it blank.

Put class css style:
--------------------

For foundation:
Cosmess.Class.foundation.success (for success class)
Cosmess.Class.foundation.error (for error class)
Cosmess.Class.foundation.info (for info class)

For bootstrap:
Cosmess.Class.bootstrap.success (for success class)
Cosmess.Class.bootstrap.error (for error class)
Cosmess.Class.bootstrap.info (for info class)


Cosmess Component
-----------------
## For CakePHP users:
Put this in your controller:

Public $components = array(
	'Cosmess.Cosmess'
);

## For Croogo users:
Just Activate Cosmess plugin:

	`Console/cake activate plugin Cosmess`




Good luck and have fun

-- kahitam --
