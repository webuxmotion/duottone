<?php

namespace app\controllers;

use app\models\Lesson;

class LessonsController extends AppController {
    
    public function indexAction() {
        $lesson_model = new Lesson();
        $items = $lesson_model->selectAll();
    
       $this->setMeta(
           'All lessons'
       );

       $this->set(compact('items'));
    }
}