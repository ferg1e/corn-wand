<?php

require '../src/corn-wand.php';

echo
c\html(
    c\body(
        c\repeat(
            'div',
            array(
                'one',
                'two',
                'three')),

        c\br(),
        c\repeat('div', 'one', 'two', 'three'),
        c\br(),

        c\repeat(
            'span',
            array(
                'pig',
                'lizard'  => array('style' => 'color:#dd3333'),
                'gator'))));
