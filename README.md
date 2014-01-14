Costume Session Message
-----------------------

I made this plugin just for fun.
This plugin for costume session messages according to what we use in CSS style.

This plugin can be use for Foundation or Bootstrap.

Requirements
------------
- CakePHP > 2.x

Config:
-------
If you use Foundation / Bootstrap.
Change config `Cosmess.Params.flashType` for 'foundation' or 'bootstrap'

Put class css style:
--------------------

For foundation:
Cosmess.Class.foundation.success (for success class)
Cosmess.Class.foudnation.error (for error class)

For bootstrap:
Cosmess.Class.bootstrap.success (for success class)
Cosmess.Class.bootstrap.error (for error class)


Cosmess Component
-----------------
Put this in your controller:

Public $components = array(
	'Cosmess.Cosmess'
);

For Croogo:
I'm already put Croogo::hookComponent for Cosmess component



Example
--------

Change this..

	$this->Session->setFlash('Message', 'default', $params);

into:

	$this->Cosmess->setFlash('Message', 'default', $params);

for parameters $params you can see it at:
	Cosmess/Controller/Component/CosmessComponent.php




Good luck and have fun
-- kahitam --
