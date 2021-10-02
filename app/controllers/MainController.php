<?php

namespace app\controllers;

use core\Tone;
use app\models\Lesson;

class MainController extends AppController {
    
    public function indexAction() {
        $lesson_model = new Lesson();
        $popular = $lesson_model->selectPopular();
    
       $this->setMeta(
           Tone::$app->getProperty('site_name'),
           'Modure Store',
           'Modure Store'
       );

       $this->set(compact('popular'));
    }
}