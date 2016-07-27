/**
 * @license Copyright (c) 2003-2015, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
    config.filebrowserBrowseUrl=  baseURL+'admin/js/ckfinder/ckfinder.html';
    config.filebrowserImageBrowseUrl = baseURL+'admin/js/ckfinder/ckfinder.html?type=Images';
	config.filebrowserFlashBrowseUrl = baseURL+'admin/js/ckfinder/ckfinder.html?type=Flash';
    config.filebrowserImageUploadUrl = baseURL+'admin/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';
    config.filebrowserUploadUrl= baseURL+'admin/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';
    config.filebrowserFlashUploadUrl = baseURL+'admin/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';
};
