<?php
  namespace App\Models;

  class Listing {
    public static function all() {
        return [
            (object) [
            'id' => 1,
            'title' => 'Learn Laravel',
            'body' => 'This is the body of the "Learn Laravel" listing.'
            ],
            (object) [
            'id' => 2,
            'title' => 'Learn Ruby on Rails',
            'body' => 'This is the body of the "Learn Ruby on Rails" listing.'
            ]
        ];
        }
    }
