<?php

namespace app\controllers;

use core\Tone;
use app\models\User;

class ProfileController extends AppController {
    
    public function indexAction() {
        $user = $_SESSION['user'] ?? null;
    
       $this->setMeta(
           'Profile Page'
       );

       $this->set(compact('user'));
    }

    public function updateAction() {
        if (!empty($_POST)) {
            $data = $_POST;
        
            $user_model = new User();
            $isUpdated = $user_model->updateProfile($data);

            if ($isUpdated) {
                $_SESSION['success'] = "Profile was updated!";
            }
        }
        
        redirect();
    }
}