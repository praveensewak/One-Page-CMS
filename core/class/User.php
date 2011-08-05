<?php

include_once('./core/class/Database.php');
include_once('./core/helper/sanitize.php');

class User{
    public $id;
    public $username;
    
    public function __construct(){
        
    }
    
    public function load($username){
        $sql = "SELECT * FROM " . TAB_USERS . " WHERE username = " . $username;
        $row = Database::getRow($sql);
        
        $this->id = $row['id'];
        $this->username = $username;
    }
}