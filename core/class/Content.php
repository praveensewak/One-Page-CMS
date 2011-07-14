<?php

include_once('./core/class/Database.php');
include_once('./core/helper/sanitize.php');

class Content{
    public $id;
    public $title;
    public $body;
    public $active;
    public $order_index;
    
    public function __construct(){
        
    }
    
    public function load($id){
        $sql = "SELECT * FROM " . TAB_CONTENT . " WHERE id = " . $id;
        $row = Database::getRow($sql);
        
        $this->id = $row['id'];
        $this->title = $row['title'];
        $this->body = $row['body'];
        $this->active = $row['active'];
        $this->order_index = $row['order_index'];
    }
    
    public static function loadPages(){
        $sql = "SELECT id FROM " . TAB_CONTENT . " WHERE active = '1' ORDER BY order_index";
        return Database::getResult($sql);
    }
}