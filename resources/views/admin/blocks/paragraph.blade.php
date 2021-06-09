@twillBlockTitle('Paragraph')
@twillBlockIcon('text')

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
