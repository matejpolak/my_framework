<?php
require_once '../vendor/codingbootcamp/exercises/db.php'; // database
require_once '../vendor/codingbootcamp/tinymvc/request.php'; // 
require_once '../vendor/codingbootcamp/tinymvc/helpers.php'; // helper functions
require_once '../vendor/polakjan/tinymvc/config.php'; // configuration

// define the system directory
define('SYSTEM_DIR', __DIR__ . '/..');

// define app directory
define('APP_DIR', SYSTEM_DIR . '/app');

// define the public directory
define('PUBLIC_DIR', SYSTEM_DIR . '/public');

// define routes directory
define('ROUTES_DIR', SYSTEM_DIR . '/vendor');

// define vendor directory
define('VENDOR_DIR', SYSTEM_DIR . '/vendor');