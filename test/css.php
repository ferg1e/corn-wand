<?php

require '../src/corn-wand.php';

echo
    c\html5(
        c\head(
            c\css(
                'css/css1.css',
                'css/css2.css')),
        c\body(
            c\div(
                array('id' => 'heart'),
                'The heart of a champion.'),
            c\p('The heart of a bampion.')));
