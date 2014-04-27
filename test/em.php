<?php

require '../src/corn-wand.php';

echo
    c\html5(
        c\body(
            array('style' => 'font-size:4em;'),
            sprintf(
                'rose %s',
                c\em('rose'))));
