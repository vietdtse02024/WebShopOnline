<?php
/** setting **/
define('BASEURL' , 'http://localhost/ShopOnline');
define('BASEPATH', dirname(__FILE__) . '/');
define('PATH_URL', 'http://localhost/ShopOnline');
define('PATH_URL_IMG', PATH_URL.'/public/upload/images/');
define('PATH_URL_IMG_PRODUCT', PATH_URL. '/public/upload/product/');

$GLOBALS['conn'] = mysqli_connect("localhost", "root", "", "shopdemo")
or
die("Can not connect database ");
