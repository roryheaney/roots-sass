<?php
$courses_metabox = $simple_mb = new WPAlchemy_MetaBox(array
(
	'id' => '_courses_meta',
	'title' => 'Courses Meta',
	'template' => get_stylesheet_directory() . '/metaboxes/courses-meta.php',
	'hide_editor' => TRUE,
	'types' => array('courses'),
));
$slideshow_metabox = $simple_mb = new WPAlchemy_MetaBox(array
(
	'id' => '_slideshow_meta',
	'title' => 'Slideshow Meta',
	'template' => get_stylesheet_directory() . '/metaboxes/slideshow-meta.php',
	'hide_editor' => TRUE,
	'types' => array('slideshows'),
));
$popular_metabox = $simple_mb = new WPAlchemy_MetaBox(array
(
	'id' => '_popular_meta',
	'title' => 'Popular Meta',
	'template' => get_stylesheet_directory() . '/metaboxes/popular-meta.php',
	'types' => array('popular'),
));

/* eof */