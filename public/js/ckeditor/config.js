/**
 * @license Copyright (c) 2003-2015, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.stylesSet.add('my_styles', [
    // Inline styles
    {name: 'code', element: 'code', attributes: {'class': 'my_style'}},
    {name: 'kbd', element: 'kbd', attributes: {'class': 'my_style'}},
    {name: 'small', element: 'small', attributes: {'class': 'my_style'}},
    {name: 'big', element: 'big', attributes: {'class': 'my_style'}},
    {name: 'del', element: 'del', attributes: {'class': 'my_style'}},
    {name: 'ins', element: 'ins', attributes: {'class': 'my_style'}}
]);

CKEDITOR.editorConfig = function (config) {
    // Define changes to default configuration here. For example:
    // config.language = 'fr';
    // config.uiColor = '#AADC6E';
    config.image_previewText = ' ';
    config.filebrowserImageUploadUrl = "/admin/article/image/upload?";
    config.height = 900;
    config.stylesSet = 'my_styles';
    config.extraPlugins = 'clipboard,widget,dialog,codesnippet,uploadimage,codemirror';
    config.contentsCss = ['/css/bootstrap.min.css', '/css/layout.css', '/css/ckeditor-custom.css'];
    config.toolbar = 'Full';
    config.toolbar_Full =
        [
            {
                name: 'document',
                items: ['Source', '-', 'Maximize', 'ShowBlocks', '-', 'DocProps', 'Preview', 'Print']
            },
            {name: 'clipboard', items: ['Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo']},
            {name: 'editing', items: ['Find', 'Replace', '-', 'SelectAll', '-', 'SpellChecker', 'Scayt']},
            {
                name: 'forms',
                items: ['Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton',
                    'HiddenField',
                    'Link', 'Unlink', 'Image', 'Flash', 'Table', 'Smiley'

                ]
            },
            '/',
            {
                name: 'basicstyles',
                items: ['CodeSnippet', 'Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'RemoveFormat']
            },
            {
                name: 'paragraph',
                items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote',
                    '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock']
            },
            {name: 'styles', items: ['Styles', 'Format', 'Font', 'FontSize']},
            {name: 'colors', items: ['TextColor', 'BGColor']}
        ];

};