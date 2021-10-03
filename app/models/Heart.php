<?php

namespace app\models;

use core\base\Model;

class Heart extends Model {

    protected $table = 'heart';

    public $attributes = [
        'userId' => '',
        'lessonId' => '',
    ];

    public function toggleHeart($lessonId) {
        $userId = $_SESSION['user']['id'] ?? null;

        if ($userId) {
            $sql = "
                SELECT * FROM {$this->table}
                WHERE userId = ?
                AND lessonId = ?
            ";

            $res = $this->db->query($sql, [$userId, $lessonId]);

            
            $item = $res[0] ?? null;

            if ($item) {
                $sql = "
                    DELETE FROM {$this->table}
                    WHERE id = ?
                ";
                $res = $this->db->execute($sql, [$item['id']]);
            } else {
                $this->load([
                    'lessonId' => $lessonId,
                    'userId' => $userId,
                ]);
                $this->save();
            }
        } else {
            $_SESSION['errors'] = 'Пожалуйста, войдите на сайт, чтобы добавлять уроки в "Избранное"';
        }
    }
}