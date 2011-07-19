<?php

$response = '';

if(true){ //TODO: Check for valid submission
    require_once('./core/init.php');
    
    $sql = "SELECT id FROM " . TAB_USERS . " WHERE username = '' AND password = ''";
    $id = Database::getValue($sql);
    
    if($id && $id !== '' && $id !== '0'){
        session_regenerate_id();
        $_SESSION['ONEPAGECMS_ADMIN_ID'] = $id;
        $response = $id;
    }
}

echo $response;
?>