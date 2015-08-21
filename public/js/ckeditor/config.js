/**
 * @license Copyright (c) 2003-2015, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function (config) {
    // Define changes to default configuration here. For example:
    // config.language = 'fr';
    // config.uiColor = '#AADC6E';
    config.image_previewText = ' ';
    config.filebrowserImageUploadUrl = "/admin/article/image/upload?";
    config.height = 900;

    config.extraPlugins = 'clipboard,widget,dialog,codesnippet,uploadimage,codemirror';

    config.codemirror = {
        tabSize: 4
    };

    config.contentsCss = '/css/bootstrap.min.css';
};
