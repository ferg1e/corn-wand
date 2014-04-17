<?php

require '../src/corn-wand.php';

echo
    c\unpack_tag('p', array(
        array('class' => 'intro'),
        'hello',
        ' there'));

//is the same as

echo 
    c\tag('p',
        array('class' => 'intro'),
        'hello',
        ' there');
