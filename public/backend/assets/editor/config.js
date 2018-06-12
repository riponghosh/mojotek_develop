/**
 * @license Copyright (c) 2003-2016, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
	
	config.extraPlugins = 'tabletoolstoolbar';
	config.extraPlugins = 'tableresize';
	config.extraPlugins = 'widget';
	config.extraPlugins = 'widgetselection';
	config.extraPlugins = 'lineutils';
	config.extraPlugins = 'html5audio';

	
	config.contentsCss = 'fonts.css';
	config.font_names = 'Traditional Arabic/Traditional Arabic;' + config.font_names;
	
	config.filebrowserBrowseUrl = 'http://alquranervasha.com/assets/fileman/index.html?integration=ckeditor';
	config.filebrowserImageBrowseUrl = 'http://alquranervasha.com/assets/fileman/index.html?integration=ckeditor&type=image';
};
