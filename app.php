<?php

session_start();

define('SALT', 'pU1TIYoa6f3Gmqkg0UviAewPvkCLc9mCxKJsVFUX2cU9CiasvsLei');
define('TOKEN_TIME', 5);
define("DB_HOST", "127.0.0.1");
define("DB_USER", "root");
define("DB_PASSWORD", "root");
<<<<<<< HEAD
define("DB_DBNAME", "colony24"); // A DEFINIR
=======
define("DB_DBNAME", "colony24;port=8889"); // A DEFINIR
>>>>>>> aeed22cac5ed3ee603b89da70ab1e88f0257800c

require __DIR__ . '/library/helpers.php';
require __DIR__ . '/model/add_user_model.php';
require __DIR__ . '/model/user_score_model.php';
require __DIR__ . '/model/create_folder_model.php';
require __DIR__ . '/model/send_json_model.php';
require __DIR__ . '/model/update_json_model.php';
require __DIR__ . '/model/score_model.php';
require __DIR__ . '/model/shop_model.php';
require __DIR__ . '/controllers/front_controller.php';
require __DIR__ . '/controllers/back_controller.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$method = $_SERVER['REQUEST_METHOD'];