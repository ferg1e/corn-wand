<?php

require '../src/corn-wand.php';

echo 
    c\tag('html',
        c\tag('body',
            c\tag('input'),
            c\tag('input', array('value' => 'rabbit')),
            c\tag('p', 'Once upon a time'),
            c\tag('div', array('style' => 'color:brown'), 'brown')));
