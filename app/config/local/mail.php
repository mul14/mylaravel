<?php

return array(

	'driver' => 'smtp',

	'host' => 'smtp.gmail.com',

	'port' => 587,

	'from' => array('address' => null, 'name' => null),

	'encryption' => 'tls',

	'username' => null,

	'password' => null,

	'sendmail' => '/usr/sbin/sendmail -bs',

	'pretend' => false,

);
