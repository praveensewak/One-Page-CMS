<?php


/* APPLICATION ENVIRONMENT */
if($_SERVER['SERVER_NAME']){
    //Local: example.localhost
    if(strpos($_SERVER['SERVER_NAME'],'.localhost') !== FALSE 
            OR $_SERVER['SERVER_NAME'] == 'localhost' 
            OR strpos($_SERVER['SERVER_NAME'],'.local') !== FALSE){
        define('ENVIRONMENT','local');
    }
    //Development: example.dev
    elseif(strpos($_SERVER['SERVER_NAME'],'.dev') !== FALSE){
        define('ENVIRONMENT','dev');
    }
    //Staging: test.example.com
    elseif(strpos($_SERVER['SERVER_NAME'],'test.') !== FALSE 
            OR strpos($_SERVER['SERVER_NAME'],'test.') === 0){
        define('ENVIRONMENT','test');
    }
    //Production: example.com
    else{
        define('ENVIRONMENT','production');
    }
}else{
    define('ENVIRONMENT','local');
}

/* ERROR REPORTING */
switch(ENVIRONMENT){
    case 'local':
        error_reporting(-1);
    case 'dev':
        error_reporting(-1);
        break;
    case 'test':
        error_reporting(0);
    case 'production':
        error_reporting(0);
        break;
    default:
        exit('Please setup the APPLICATION ENVIRONMENT correctly.');
}

/* DEFAULT INI SETTINGS */
set_include_path(dirname(__FILE__));
@ini_set('cgi.fix_pathinfo', 0);
if(ini_get('date.timezone') == ''){
    date_default_timezone_set('GMT');
}

require_once('./core/settings.php');
require_once('./core/helper/sanitize.php');
require_once('./core/class/Database.php');
require_once('./core/class/Content.php');


Database::setConnectionInfo(DB_NAME, DB_USER, DB_PASS);