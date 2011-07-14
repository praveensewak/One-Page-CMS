<?php

error_reporting(-1);
ini_set("display_errors", 1);

require_once('./core/settings.php');
require_once('./core/helper/sanitize.php');
require_once('./core/class/Database.php');
require_once('./core/class/Content.php');


Database::setConnectionInfo(DB_NAME, DB_USER, DB_PASS);