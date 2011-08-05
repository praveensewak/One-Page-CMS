/*
Copyright (c) 2003-2011, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
*/

CKEDITOR.editorConfig = function( config )
{
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
        
        config.baseFloatZIndex = 15000;
        
        config.toolbar =
        [
            { name: 'clipboard',   items : [ 'Cut','Copy','Paste','PasteText','PasteFromWord' ] },
            { name: 'basicstyles', items : [ 'Bold','Italic','Underline','-','RemoveFormat' ] },
            { name: 'paragraph',   items : [ 'NumberedList','BulletedList','-','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock' ] },
            { name: 'insert',       items : [ 'Link','Unlink','-','Image','Table' ] },
            { name: 'styles',      items : [ 'Styles','FontSize' ] },
            { name: 'colors',      items : [ 'TextColor' ] },
            { name: 'document',    items : [ 'Source' ] }
        ];
};
