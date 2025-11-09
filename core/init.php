<?php

require_once __DIR__ . '/kernel.php';
require_once __DIR__ . '/router.php';
require_once __DIR__ . '/database.php';

include_once __DIR__ . '/../app/Controllers/ProductController.php';

date_default_timezone_set('Asia/Jakarta');

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}