@twillBlockTitle('Image with Caption')
@twillBlockIcon('image')

@formField('medias', [
    'name' => 'image',
    'label' => 'Image',
    'note' => 'Minimum image width 1300px'
])
@formField('input', [
    'translated' => true,
    'name' => 'image_caption',
    'label' => 'Image Caption (translated)',
    'maxlength' => 250,
    'required' => true,
    'type' => 'textarea'
])
