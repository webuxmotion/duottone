<?php

namespace app\controllers;

use app\models\Lesson;
use app\models\Heart;

class LikesController extends AppController {
    
    public function indexAction() {
      $items = null;

      if (isUser()) {
        $lesson_model = new Lesson();
        $items = $lesson_model->selectLikedByUser();
      }
    
       $this->setMeta(
           'All lessons'
       );

       $this->set(compact('items'));
    }

    public function toggleLikeAction() {
        $lessonId = $_GET['lessonId'] ?? null;

        if ($lessonId) {
            
            $heart_model = new Heart();
            $heart_model->toggleHeart($lessonId);
        }
        
        redirect();
    }
}
