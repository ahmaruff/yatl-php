<?php declare(strict_types = 1);
      use Yatl\Bootstrap; 

// if (! defined('PHPNEXUS_VERSION')) {
//     require_once dirname(__DIR__) . '/autoload.php';
// }

if(!defined('YATL_VERSION')){
    require_once dirname(__DIR__) . '/autoload.php';
}


$bs = new Bootstrap();

$bs->init();
