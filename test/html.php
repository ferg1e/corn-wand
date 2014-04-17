<?php

require '../src/corn-wand.php';

echo
    c\html(array('lang' => 'en'),
        c\tag('body',
            c\tag('div', 'test')));
