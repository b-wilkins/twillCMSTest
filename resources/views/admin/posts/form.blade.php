@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'name' => 'title',
        'label' => 'Title',
        'maxlength' => 200
    ])

    @formField('input', [
        'name' => 'subtitle',
        'label' => 'Subtitle',
        'maxlength' => 100
    ])
    @formField('tags', [
        'label' => 'Tags'
    ])

    @formField('input', [
        'name' => 'author',
        'label' => 'Author',
        'note' => 'This should be who wrote the article',
        'maxlength' => 100
    ])

    @formField('wysiwyg', [
        'name' => 'description',
        'label' => 'Description',
        'toolbarOptions' =>
            [
                ['header' => [2, 3, 4, 5, 6, false]],
                'bold',
                'italic',
                'underline',
                "clean",
            ],
        'placeholder' => 'Article Text',
        'maxlength' => 10000,
        'editSource' => false,
        'note' => 'Article Content',
    ])

    @formField('medias', [
        'name' => 'post_image',
        'label' => 'Post Image'
    ])

    @formField('block_editor', [
        'blocks' => []
    ])

@stop
