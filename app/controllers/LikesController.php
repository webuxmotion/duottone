<?php

namespace app\controllers;

use app\models\Lesson;

class LikesController extends AppController {
    
    public function indexAction() {
        $lesson_model = new Lesson();
        $items = $lesson_model->selectLikedByUser();
    
       $this->setMeta(
           'All lessons'
       );

       $this->set(compact('items'));
    }
}