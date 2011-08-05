<?php
require_once('./core/init.php');

$result = '';

if($_SERVER['REQUEST_METHOD'] == 'POST'){ // Check if POST, and is valid
    $username = $_POST['tb_username'];
    $password = $_POST['tb_password'];
    
    $sql = "SELECT id FROM " . TAB_USERS . " WHERE username = :username AND password = SHA1(CONCAT(confirm_string, :password))";
    $params = array('username' => $username, 'password' => $password);
    $id = Database::getValue($sql, $params);
    
    if($id && $id !== ''){
        session_start();
        session_regenerate_id();
        $_SESSION['ONEPAGECMS_ADMIN_ID'] = $id;
        session_write_close();
        $result = $id;
    }
}

echo $result;
?>