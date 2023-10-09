<?php

use core\Router;

// custom route here
// ...

Router::add(
    '^lessons/(?P<alias>[0-9a-z-]+)$', 
    ['controller' => 'Lessons', 'action' => 'view']
);

Router::add(
    '^admin$',
    ['controller' => 'Main', 'action' => 'index', 'prefix' => 'admin']
);

Router::add(
    '^admin/?(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$',
    ['prefix' => 'admin']
);