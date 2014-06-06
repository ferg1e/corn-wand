<?php

require '../src/corn-wand.php';

echo
c\html5(
    c\body(
        c\linput(
            'Last name',
            array('id' => 'last_name')),
        c\focus('last_name')));
