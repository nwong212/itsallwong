<?php

return [
    'debug' => true,
    'smartypants' => true,
		// 'cache' => [
    //   'pages' => [
    //       'active' => true,
    //   ]
  	// ]
		'routes' => [
    [
      'pattern' => 'logout',
      'action'  => function() {

        if ($user = kirby()->user()) {
          $user->logout();
        }

        go('login');

      }
    ]
  ]
];

?>
