<?php

/* Site details - temporary */
/* TODO: get these details from db */
define ("SITE_NAME", "One Page CMS");
define ("AUTHOR_NAME", "Praveen Sewak");
define ("GOOGLE_ANALYTICS",""); //XXXXX-X

/* Database details */
define ("DB_SERVER", "localhost");
define ("DB_USER", "root");
define ("DB_PASS", "Password1");
define ("DB_NAME", "onepage");

/* Database tables */
define ("T_PREFIX", "");

define ("TAB_SETTINGS", T_PREFIX . "settings");
define ("TAB_CONTENT", T_PREFIX . "content");
define ("TAB_USERS", T_PREFIX . "users");
define ("TAB_MODULES", T_PREFIX . "modules");

/* User Levels */
define ("ADMIN_LEVEL", 1);
define ("UNASSIGNED_LEVEL", 2);
define ("USER_LEVEL", 3);
define ("EDITOR_LEVEL", 4);
define ("GUEST_LEVEL", 5);