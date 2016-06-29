<?php

require __DIR__ . '/../../../vendor/autoload.php';

$name = $_GET['name'];

echo sprintf('Hello %s!', $name);