<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
ini_set('post_max_size','100M');
ini_set("auto_detect_line_endings", true);
define('ROOTPATH', dirname(dirname(__FILE__)));
define('ROOTDIR', basename(__DIR__));
define('PAGESDIR', 'pages');
define('MODULEDIR','models');
define('IMAGESDIR','images');
define('MUSICDIR','music');
define('MAX_FILE_SIZE',99999999);
//echo ROOTDIR ;