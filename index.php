<?php

require_once('./core/init.php');

/*$result = Database::getResult('SELECT * FROM ' . TAB_CONTENT);

//print_r($result);
foreach($result as $page){
    print($page['title']);
}*/

$cid = Content::loadPages();

?>

<?php include('./html/default.tpl.php'); ?>