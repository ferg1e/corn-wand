<?php

require '../src/corn-wand.php';

echo
    c\html5(
        c\head(
            c\css('css/css.css')),
        c\body(
            c\div(
                array('id' => 'heart'),
                'The heart of a champion.')));
