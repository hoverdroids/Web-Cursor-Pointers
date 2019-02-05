<?php
/*
    Plugin Name: Web Cursor Pointers
    Plugin URI: http://HoverDroids.com/
    Description:  A plugin that shows the different web pointers/cursors. It's intended to be used as a reference tool on our site.
    Author: Chris Sprague | HoverDroids
    Version: 1.0.0 
    Author URI: http://HoverDroids.com/
*/ 
if(!defined('ABSPATH')){ exit; }

//TODO only load on certain pages
wp_register_style('web-cursor-pointers-style', plugin_dir_url(__FILE__).('css/style.css'));
wp_enqueue_style('web-cursor-pointers-style');

add_shortcode('webCursorPointers','webCursorPointers');
function webCursorPointers(){
	return 
	'<h1>Example of cursor</h1>
	<div class="cursors">
		<div class="ptrdemo auto">auto</div>
		<div class="ptrdemo default">default</div>
		<div class="ptrdemo none">none</div>
		<div class="ptrdemo context-menu">context-menu</div>
		<div class="ptrdemo help">help</div>
		<div class="ptrdemo pointer">pointer</div>
		<div class="ptrdemo progress">progress</div>
		<div class="ptrdemo wait">wait</div>
		<div class="ptrdemo cell">cell</div>
		<div class="ptrdemo crosshair">crosshair</div>
		<div class="ptrdemo text">text</div>
		<div class="ptrdemo vertical-text">vertical-text</div>
		<div class="ptrdemo alias">alias</div>
		<div class="ptrdemo copy">copy</div>
		<div class="ptrdemo move">move</div>
		<div class="ptrdemo no-drop">no-drop</div>
		<div class="ptrdemo not-allowed">not-allowed</div>
		<div class="ptrdemo all-scroll">all-scroll</div>
		<div class="ptrdemo col-resize">col-resize</div>
		<div class="ptrdemo row-resize">row-resize</div>
		<div class="ptrdemo n-resize">n-resize</div>
		<div class="ptrdemo s-resize">s-resize</div>
		<div class="ptrdemo e-resize">e-resize</div>
		<div class="ptrdemo w-resize">w-resize</div>
		<div class="ptrdemo ns-resize">ns-resize</div>
		<div class="ptrdemo ew-resize">ew-resize</div>
		<div class="ptrdemo ne-resize">ne-resize</div>
		<div class="ptrdemo nw-resize">nw-resize</div>
		<div class="ptrdemo se-resize">se-resize</div>
		<div class="ptrdemo sw-resize">sw-resize</div>
		<div class="ptrdemo nesw-resize">nesw-resize</div>
		<div class="ptrdemo nwse-resize">nwse-resize</div>
	</div>';
}