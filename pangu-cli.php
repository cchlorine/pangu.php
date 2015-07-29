<?php
require './pangu.php';

$text = $_SERVER['argv'];
echo pangu($text[1]);