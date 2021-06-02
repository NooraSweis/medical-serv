<?php

session_start();

define("BURL", "http://127.0.0.1/medical-serv/");
define("BURLA", "http://127.0.0.1/medical-serv/admin/");
define("ASSETS", "http://127.0.0.1/medical-serv/assets/");

define("BL",__DIR__.'/');
define("BLA",__DIR__.'/admin/');

// connect to db
require_once(BL.'functions/db.php');