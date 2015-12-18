<?php


var_dump($name = isset($argv[1]) ? $argv[1] : 'nobody'); // < php 7

var_dump($name = $argv[1] ?? 'nobody'); //php 7
