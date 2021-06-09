<?php

return [

   // 'admin_app_url' => env('ADMIN_APP_URL', env('APP_URL')),
   // 'admin_app_path' => env('ADMIN_APP_PATH', 'admin'),
   // 'auth_login_redirect_path' => env('ADMIN_APP_PATH', 'admin'),

    'media_library' => [
        'disk' => 'twill_media_library',
        'endpoint_type' => env('MEDIA_LIBRARY_ENDPOINT_TYPE', 'local'),
        'cascade_delete' => env('MEDIA_LIBRARY_CASCADE_DELETE', false),
        'local_path' => env('MEDIA_LIBRARY_LOCAL_PATH', 'uploads'),
        'image_service' => env('MEDIA_LIBRARY_IMAGE_SERVICE', 'A17\Twill\Services\MediaLibrary\Glide'),
        'acl' => env('MEDIA_LIBRARY_ACL', 'private'),
        'filesize_limit' => env('MEDIA_LIBRARY_FILESIZE_LIMIT', 50),
        'allowed_extensions' => ['svg', 'jpg', 'gif', 'png', 'jpeg'],
        'init_alt_text_from_filename' => true,
        'prefix_uuid_with_local_path' => config('twill.file_library.prefix_uuid_with_local_path', false),
        'translated_form_fields' => false,
    ],

    'file_library' => [
        'endpoint_type' => env('FILE_LIBRARY_ENDPOINT_TYPE', 'local'),
        'local_path' => env('FILE_LIBRARY_LOCAL_PATH', 'uploads'),
        'cascade_delete' => env('FILE_LIBRARY_CASCADE_DELETE', true),
    ],

    'enabled' => [
        'settings' => true,
    ],

    'block_editor' => [
        'blocks' => [
            'image' => [
                'component' => 'a17-block-image',
                'rules' => [
                    'image' => 'required|image',
                ]
            ],
            'image_with_caption' => [
                'component' => 'a17-block-image_with_caption',
                'rules' => [
                    'image' => 'required|image',
                    'image_subtitle' => 'required|string|min:5|max:250'
                ]
            ],
            'paragraph' => [
                'component' => 'a17-block-paragraph',
                'rules' => [
                    'paragraph' => 'required|string|min:5'
                ]
            ],
            'paragraph_with_image' => [
                'component' => 'a17-block-paragraph_with_image',
                'rules' => [
                    'image_aligned_with_paragraph' => 'required|image',
                    'paragraph' => 'required|string|min:5'
                ]
            ],

        ],
        'crops' => [
            'image_aligned_with_paragraph' => [
                'default' => [
                    [
                        'name' => 'default',
                        'ratio' => 16 / 9
                    ]
                ],
                'desktop' => [
                    [
                        'name' => 'desktop',
                        'ratio' => 16 / 9,
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
            'image' => [
                'default' => [
                    [
                        'name' => 'default',
                        'ratio' => 16 / 9
                    ]
                ],
                'desktop' => [
                    [
                        'name' => 'desktop',
                        'ratio' => 16 / 9,
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
        ],
    ],
];
