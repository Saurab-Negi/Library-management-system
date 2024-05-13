<?php
session_start();
if ($_SERVER['HTTP_HOST'] == 'localhost') {
    define("BASE_URL", "http://localhost/PHP/lms-master/");
    define("DIR_URL", $_SERVER['DOCUMENT_ROOT'] . "/PHP/lms-master/");

    define("SERVER_NAME", "localhost");
    define("USERNAME", "root");
    define("PASSWORD", "");
    define("DATABASE", "library");
} else {
    define("BASE_URL", "https://lms.com");
    define("DIR_URL", $_SERVER['DOCUMENT_ROOT']);

    define("SERVER_NAME", "");
    define("USERNAME", "");
    define("PASSWORD", "");
    define("DATABASE", "");
}
