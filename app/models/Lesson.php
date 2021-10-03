<?php

namespace app\models;

use core\base\Model;

class Lesson extends Model {

    protected $table = 'lesson';

    public function selectAll() {
        $allItems = $this->fetchAll();
        
        if (!$allItems) return null;

        $likes = $this->getLikes($allItems);

        $resItems = $this->mergeLikesIntoItems($allItems, $likes);
        
        return $resItems;
    }

    public function selectByAlias($alias) {
        $sql = "
            SELECT * FROM {$this->table}
            WHERE alias = ?
        ";

        $res = $this->db->query($sql, [$alias]);

        $likes = $this->getLikes($res);

        $resItems = $this->mergeLikesIntoItems($res, $likes);

        return $resItems[0] ?? null;
    }

    public function selectPopular() {
        $popular = $this->fetchPopular();

        $likes = $this->getLikes($popular);

        $resItems = $this->mergeLikesIntoItems($popular, $likes);
        
        return $resItems;
    }

    public function selectLikedByUser() {
        $items = $this->fetchLikedByUser();

        if (!$items) return null;

        $likes = $this->getLikes($items, true);

        $resItems = $this->mergeLikesIntoItems($items, $likes);
        
        return $resItems;
    }

    public function fetchLikedByUser() {
        $userId = $_SESSION['user']['id'];
        $sql = "
            SELECT lessonId FROM heart
            WHERE userId = ?
        ";

        $heartsRes = $this->db->query($sql, [$userId]);
        if (!empty($heartsRes)) {
            $idsArr = [];

            foreach ($heartsRes as $item) {
                array_push($idsArr, $item['lessonId']);
            }
    
            $slots = $this->getSlotsFromArr($idsArr);
    
            $sql = "
                SELECT * FROM {$this->table}
                WHERE id in ($slots)
            ";
            $items = $this->db->query($sql, $idsArr);
    
            return $items;
        }
        
        return null;
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

    public function fetchAll() {
        $sql = "SELECT * FROM {$this->table}";
        $res = $this->db->query($sql);

        if (empty($res)) {
            return false;
        }

        return $res;
    }

    public function getLikes($items, $allLikedByUser = false) {
        $resArr = [];

        foreach ($items as $item) {
            $sql = "
                SELECT COUNT(id) FROM heart
                WHERE lessonId = ?
            ";
            
            $allLikes = $this->db->query($sql, [$item['id']]);

            $isLikedByUser = $allLikedByUser;

            if (isset($_SESSION['user']) && !$isLikedByUser) {
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

    private function mergeLikesIntoItems($items, $likes) {
        $resItems = [];

        foreach ($items as $item) {
            $item['likes'] = $likes[$item['id']]['all'];
            $item['likedByUser'] = $likes[$item['id']]['likedByUser'];

            array_push($resItems, $item);
        }
        
        return $resItems;
    }
}