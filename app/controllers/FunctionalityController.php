<?php

namespace app\controllers;

use app\models\Lesson;
use core\Tone;

class FunctionalityController extends AppController {
    
    public function indexAction() {
        $folder = "/images/functionality";

        $this->setMeta(
            'Функционал сайта - ' . Tone::$app->getProperty('site_name'),
            'Страница с описанием функционала сайта. Duottone Music Academy',
            'music, piano, duottone, piano lessons'
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