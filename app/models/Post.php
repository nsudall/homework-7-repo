<?php

namespace app\models;

class Post
{
    public function getAllPosts() {
        return [
            [
                'id' => '1',
                'post' => 'comment 1'
            ],
            [
                'id' => '2',
                'post' => 'comment 2'
            ]
        ];
    }
}