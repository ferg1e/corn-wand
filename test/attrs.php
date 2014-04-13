<?php

require '../src/corn-wand.php';

$attrs = c\attrs(array(
    'name' => 'value>',
    'empty' => '',
    '',
    'checked'));

echo "<tag$attrs/>";
