<?php
require 'funtion.php';
require 'database.php';
require __DIR__. '/../vendor/autoload.php';

// conectarnos a la base de datos
use Model\ActiveRecord;
ActiveRecord::setDB($db);
?>