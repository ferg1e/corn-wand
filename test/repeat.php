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

        c\repeat(
            'p',
            array(
                'north' => array('style' => 'background:#ddeedd'),
                'south',
                'east',
                'west' => array('style' => 'font-size:2em'))),

        c\repeat(
            'span',
            array(
                'pig',
                'lizard'  => array('style' => 'color:#dd3333'),
                'gator'))));
