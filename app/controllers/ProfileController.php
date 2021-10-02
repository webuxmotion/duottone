<?php

namespace app\controllers;

use core\Tone;

class ProfileController extends AppController {
    
    public function indexAction() {
        $user = $_SESSION['user'] ?? null;
    
       $this->setMeta(
           'Profile Page'
       );

       $this->set(compact('user'));
    }
}