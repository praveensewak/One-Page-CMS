<?php

function sanitize($var, $type){
    switch($type){
        case 'int':
            $var = (int)$var;
            break;

        case 'str':
            $var = trim($var);
            break;

        case 'nohtml':
            $var = htmlentities(trim($var), ENT_QUOTES);
            break;

        case 'plain':
            $var = htmlentities(trim($var), ENT_NOQUOTES);
            break;

        case 'upper_word':
            $var = ucwords(strtolower($var));
            break;

        case 'ucfirst':
            $var = ucfirst(trim($var));
            break;
        
        case 'lower':
            $var = strtolower(trim($var));
            break;
        
        case 'sql':
            return mysql_real_escape_string($var);
            break;
        
        case 'anchor':
            $var = str_replace(" ", "-", strtolower(trim($var)));
    }
    
    return $var;
}