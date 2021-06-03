<?php

namespace App\Http\Requests\Admin;

use A17\Twill\Http\Requests\Admin\Request;

class PostRequest extends Request
{
    public function rulesForCreate()
    {
        return [
            'title' => 'required|string|min:5|max:200',
            'subtitle' => 'nullable|string|min:5|max:200',
            'author' => 'string|min:1|max:200',
        ];
    }

    public function rulesForUpdate()
    {
        return [
            'title' => 'required|string|min:5|max:200',
            'subtitle' => 'nullable|string|min:5|max:200',
            'author' => 'string|min:1|max:200',
        ];
    }
}
