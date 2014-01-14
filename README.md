Costume Session Message
-----------------------

I made this plugin just for fun.

This plugin just configuration for costume session messages according to what we use in Foundation or bootstrap CSS style.

Requirements
------------
- CakePHP > 2.x

Config:
-------
If you use Foundation / Bootstrap.
Change config `Cosmess.Params.flashType` for 'foundation' or 'bootstrap'

if not, leave it blank.

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
## For CakePHP users:
Put this in your controller:

Public $components = array(
	'Cosmess.Cosmess'
);

## For Croogo users:
see at Cosmess/Config/bootstrap.php
for Croogo::hookComponent();


Example
-------

rename CosmessSession in beforeFilter:

	public function beforeFilter() {
		$this->Session = $this->CosmessSession;
	}






Good luck and have fun
-- kahitam --
