<?php

use core\Router;

// custom route here
// ...

Router::add(
    '^lessons/(?P<alias>[0-9a-z-]+)$', 
    ['controller' => 'Lessons', 'action' => 'view']
);