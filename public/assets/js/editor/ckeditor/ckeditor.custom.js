// Default ckeditor
CKEDITOR.replace( 'editor1', {
   toolbar:[
	{ name: 'clipboard', groups: [ 'clipboard', 'undo' ], items: [ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo' ] },
	{ name: 'editing', groups: [ 'find', 'selection', 'spellchecker' ], items: [ 'Scayt' ] },
	{ name: 'links', items: [ 'Link', 'Unlink', 'Anchor' ] },
	{ name: 'insert', items: [ 'Image', 'Table', 'HorizontalRule', 'SpecialChar' ] },
	{ name: 'tools', items: [ 'Maximize' ] },
	{ name: 'document', groups: [ 'mode', 'document', 'doctools' ], items: [ 'Source' ] },
	{ name: 'others', items: [ '-' ] },
	'/',
	{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ], items: [ 'Bold', 'Italic', 'Strike', '-', 'RemoveFormat' ] },
	{ name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ], items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote' ] },
	{ name: 'styles', items: [ 'Styles', 'Format' ] },
	{ name: 'about', items: [ 'About' ] }
],

// Toolbar groups configuration.
toolbarGroups : [
	{ name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
	{ name: 'editing', groups: [ 'find', 'selection', 'spellchecker' ] },
	{ name: 'links' },
	{ name: 'insert' },
	{ name: 'forms' },
	{ name: 'tools' },
	{ name: 'document', groups: [ 'mode', 'document', 'doctools' ] },
	{ name: 'others' },
	'/',
	{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
	{ name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ] },
	{ name: 'styles' },
	{ name: 'colors' },
	{ name: 'about' }
]

} );





// Inline ckeditor
CKEDITOR.disableAutoInline = true;
//init the area to be done
CKEDITOR.inline( 'area1', {
    toolbar: [
        {
            name: 'basicstyles',
            groups: ['basicstyles'],
            items: [
                'Format',
                'Bold',
                'Italic',
                'Underline'
            ]
        },
        {
            name: 'paragraph',
            groups: [
                'list',
                'indent',
                'blocks',
                'align',
                'bidi'
            ],
            items: [
                'NumberedList',
                'BulletedList',
                'JustifyLeft',
                'JustifyCenter',
                'JustifyRight',
            ]
        },
        {
            name: 'links',
            items: [
                'Link',
                'Unlink'
            ]
        },
    ],
    fillEmptyBlocks: false,
    autoParagraph: false
} );
