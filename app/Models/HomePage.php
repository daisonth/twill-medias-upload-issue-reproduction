<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Model;

class HomePage extends Model
{
  use HasMedias;

  protected $fillable = [
    'published',
    'title',
    'description',
  ];

  public $mediasParams = [
    'demo_image' => [
      'default' => [
        [
          'name' => 'default',
          'ratio' => 2 / 1,
        ],
      ],
    ],
    'demo_images' => [
      'default' => [
        [
          'name' => 'default',
          'ratio' => 1,
        ],
      ],
    ],
  ];
}
