<?php
session_start();
include_once __DIR__.'/../../../config/connection.php';

echo '<pre>';
print_r($_POST);
echo '</pre>';
