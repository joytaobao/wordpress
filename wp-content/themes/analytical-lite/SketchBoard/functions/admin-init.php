<?php
/********************************************
 Frame Work code starts here
*********************************************/
/********************************************
 Theme Variables
*********************************************/
global $themename;
global $shortname;
require_once(get_template_directory().'/SketchBoard/functions/sketch-functions.php'); // pagination, excerpt control etc..
require_once(get_template_directory().'/SketchBoard/functions/sketch-theme-support.php'); // Thumbnail supports
require_once(get_template_directory().'/SketchBoard/functions/sketch-enqueue.php'); // Enqueue Css Scripts
require_once(get_template_directory().'/SketchBoard/functions/sketch-breadcrumb.php'); // custom post types includes
require_once(get_template_directory().'/SketchBoard/functions/sketch-background-gallery/skebggallery.php'); // sketch bg-gallery
?>