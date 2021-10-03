<?php

namespace app\controllers;

use app\models\Lesson;

class FunctionalityController extends AppController {
    
    public function indexAction() {
        $folder = "/images/functionality";

       $this->setMeta(
           'Site Functionality'
       );

       $this->set(compact('folder'));
    }

    public function viewAction() {
        $alias = $this->route['alias'];
        $lesson_model = new Lesson();
        $item = $lesson_model->selectByAlias($alias);

        $content = null;
        
        $fileNamePart = 'pages/Lessons/content-items/' . $alias . '/index';
        $filePath = APP . '/' . $fileNamePart . '.php';
        if (is_file($filePath)) {
            $content = $this->loadView($fileNamePart, [
                'folder' => '/content/' . $alias
            ]);
        }

        $this->set(compact('item', 'content'));
    }
}