<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController;

class PostController extends ModuleController
{
    protected $moduleName = 'posts';
    protected $previewView = 'site.post'; //preview used for the block editor
}
