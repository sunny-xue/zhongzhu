/*
Copyright (c) 2003-2010, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
*/
CKEDITOR.editorConfig = function( config )
{
    // Define changes to default configuration here. For example:
    // config.language = 'fr';
    config.uiColor = '#F1F5F2';
    // ÎÄ¼þä¯ÀÀ
    config.filebrowserImageBrowseUrl = "../include/dialog/select_images.php";
    config.filebrowserFlashBrowseUrl = "../include/dialog/select_media.php";
    config.filebrowserImageUploadUrl  = "../include/dialog/select_images_post.php";
	
	config.autoParagraph = false;
    config.enterMode = CKEDITOR.ENTER_BR;
	config.shiftEnterMode = CKEDITOR.ENTER_P; 
    config.font_names = '宋体/宋体;黑体/黑体;仿宋/仿宋;楷体/楷体;隶书/隶书;幼圆/幼圆;微软雅黑/微软雅黑;' + config.font_names;
};
