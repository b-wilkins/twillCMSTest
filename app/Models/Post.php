<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Model;

class Post extends Model
{
    use HasSlug, HasMedias;

    protected $fillable = [
        'published',
        'title',
        'subtitle',
        'author',
        'description',
        'publish_start_date',
    ];

    public $slugAttributes = [
        'title',
    ];

    public $mediasParams = [
        'post_image' => [
            'desktop' => [
                [
                    'name' => 'desktop',
                    'ratio' => 16 / 9,
                ],
            ],
            'tablet' => [
                [
                    'name' => 'mobile',
                    'ratio' => 750 / 520,
                ],
            ],
            'mobile' => [
                [
                    'name' => 'mobile',
                    'ratio' => 1,
                ],
            ],
            'flexible' => [
                [
                    'name' => 'free',
                    'ratio' => 0,
                ],
                [
                    'name' => 'landscape',
                    'ratio' => 16 / 9,
                ],
                [
                    'name' => 'portrait',
                    'ratio' => 3 / 5,
                ],
            ],
        ],
    ];

    /**
     * postSlug.
     */
    public function postSlug()
    {
        $this->hasMany('App\Models\Slugs\PostSlug');
    }
}
