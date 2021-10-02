<?php

namespace app\models;

use core\base\Model;

class Lesson extends Model {

    protected $table = 'lesson';

    public function selectPopular() {
        $popular = $this->fetchPopular();

        $likes = $this->getLikes($popular);

        $resItems = [];

        foreach ($popular as $item) {
            $item['likes'] = $likes[$item['id']]['all'];
            $item['likedByUser'] = $likes[$item['id']]['likedByUser'];

            array_push($resItems, $item);
        }
        
        return $resItems;
    }

    public function fetchPopular() {
        $sql = "
            SELECT * FROM {$this->table}
            LIMIT 3
        ";
        
        $res = $this->db->query($sql);

        if (empty($res)) {
            return false;
        }

        return $res;
    }

    public function getLikes($items) {
        $resArr = [];

        foreach ($items as $item) {
            $sql = "
                SELECT COUNT(id) FROM heart
                WHERE lessonId = ?
            ";
            
            $allLikes = $this->db->query($sql, [$item['id']]);

            $isLikedByUser = false;

            if (isset($_SESSION['user'])) {
                $sql = "
                    SELECT * FROM heart
                    WHERE lessonId = ? AND userId = ?
                ";

                $userLikes = $this->db->query($sql, [$item['id'], $_SESSION['user']['id']]);

                if (!empty($userLikes)) {
                    $isLikedByUser = true;
                }
            }

            $resArr[$item['id']] = [
                'all' => $allLikes[0]['COUNT(id)'],
                'likedByUser' => $isLikedByUser
            ];
        }
        
        return $resArr;
    }
}