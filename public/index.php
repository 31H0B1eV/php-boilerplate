<?php
require __DIR__.'/../vendor/autoload.php';

use App\Example;

$example = new Example();
echo $example->boilerplate();