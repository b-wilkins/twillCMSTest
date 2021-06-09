@twillBlockTitle('Paragraph with Image')
@twillBlockIcon('image-text')

@formField('medias', [
    'name' => 'image_aligned_with_paragraph',
    'label' => 'Image',
    'required' => true,
])
@formField('select', [
    'name' => 'image_alignment',
    'label' => 'Image Alignment',
    'unpack' => true,
    'options' => [
        [
            'value' => 'md:float-left pr-5',
            'label' => 'Left'
        ],
        [
            'value' => 'md:float-right pl-5',
            'label' => 'Right'
        ],
    ]
])
@formField('select', [
    'name' => 'image_width_desktop',
    'label' => 'Width On Desktop',
    'options' => [
        [ 'value' => 'lg:w-3/12', 'label' => '25%' ],
        [ 'value' => 'lg:w-6/12', 'label' => '50%' ],
        [ 'value' => 'lg:w-9/12', 'label' => '75%' ],
        [ 'value' => 'lg:w-full', 'label' => '100%' ],
    ]
])
@formField('select', [
    'name' => 'image_width_tablet',
    'label' => 'Width On Tablet',
    'options' => [
        [ 'value' => 'md:w-3/12', 'label' => '25%' ],
        [ 'value' => 'md:w-6/12', 'label' => '50%' ],
        [ 'value' => 'md:w-9/12', 'label' => '75%' ],
        [ 'value' => 'md:w-full', 'label' => '100%' ],
    ]
])
@formField('wysiwyg', [
    'translated' => true,
    'name' => 'paragraph',
    'label' => 'Paragraph',
    'type' => 'textarea',
    'required' => true,
    'toolbarOptions' => [
        ['bold', 'italic', 'underline'], ['list-ordered', 'list-unordered', 'align'], ['link', 'clean']
    ]
])
