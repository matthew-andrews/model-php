<?php
/**
 * model.php unit tests
 *
 * @copyright The Financial Times Limited [All Rights Reserved]
 * @author Matt Andrews <matt@mattandre.ws>
 */

$file = __DIR__ . '/../vendor/autoload.php';
if (!file_exists($file)) {
  throw new RuntimeException('Install dependencies to run test suite.');
}

$autoload = require_once $file;

