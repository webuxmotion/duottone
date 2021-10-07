<?php

namespace app\controllers;

use app\models\Lesson;
use core\Tone;

class LessonsController extends AppController {
    
    public function indexAction() {
        $lesson_model = new Lesson();
        $items = $lesson_model->selectAll();
    
        $this->setMeta(
            'Все уроки - ' . Tone::$app->getProperty('site_name'),
            'Страница с уроками. Duottone Music Academy',
            'music, piano, duottone, piano lessons'
        );

       $this->set(compact('items'));
    }

    public function viewAction() {
        $alias = $this->route['alias'];
        $lesson_model = new Lesson();
        $item = $lesson_model->selectByAlias($alias);
        if ($item) {
            $lesson_model->setViews($item['id'], $item['views'] + 1);
        }

        $content = null;
        
        $fileNamePart = 'pages/Lessons/content-items/' . $alias . '/index';
        $filePath = APP . '/' . $fileNamePart . '.php';
        if (is_file($filePath)) {
            $content = $this->loadView($fileNamePart, [
                'folder' => '/content/' . $alias
            ]);
        }

        $this->setMeta(
            ($item['title'] ? $item['title'] . ' - ' : '') . Tone::$app->getProperty('site_name'),
            'Страница урока. Duottone Music Academy',
            'music, piano, duottone, piano lessons, lesson'
        );

        $this->set(compact('item', 'content'));
    }
}