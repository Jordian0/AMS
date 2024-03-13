<?php
require("../vendor/autoload.php");

//echo $_SERVER['DOCUMENT_ROOT'].'/api_files/models';
$openapi = \OpenApi\Generator::scan([$_SERVER['DOCUMENT_ROOT'].'/api_files/models']);

header('Content-Type: application/json');
echo $openapi->toJSON();
