<?php 
/**
 * Here is the serverless function entry
 * for deployment with Vercel.
 */
echo "<pre>";
print_r($_SERVER);
require __DIR__.'/../public/index.php';