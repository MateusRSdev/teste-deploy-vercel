<?php 
/**
 * Here is the serverless function entry
 * for deployment with Vercel.
 */
echo "<pre>";
$_SERVER["PATH_INFO"] = $_SERVER["REQUEST_URI"];
print_r($_SERVER);
require __DIR__.'/../public/index.php';