<?php
/**
 * test case using php
 *
 * */

require_once  __DIR__ . '/../vendor/autoload.php';

use Cakpep\Hello;
use Cakpep\Helpers\String;

echo Hello::world();
echo String::truncate();