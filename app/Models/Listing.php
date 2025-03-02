<?php

  namespace App\Models;

  class Listing {
    public static function all() {
      return [
        [
          'id' => 1,
          'title' => 'Job Listing 1',
          'description' => 'This is a description for job listing 1'
        ],
        [
          'id' => 2,
          'title' => 'Job Listing 2',
          'description' => 'This is a description for job listing 2'
        ],
        [
          'id' => 3,
          'title' => 'Job Listing 3',
          'description' => 'This is a description for job listing 3'
        ]
      ];
    }

    public static function find($id) {
      $listings = self::all();

      foreach ($listings as $listing) {
        if ($listing['id'] == $id) {
          return $listing;
        }
      }
    }
  }