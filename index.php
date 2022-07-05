<?php
$path = '';
$index = '/index.html';
exec('find '.$path.' -type d -exec cp -n '.$index.' {}/index.html \;');
