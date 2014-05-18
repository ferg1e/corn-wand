<?php

require '../src/corn-wand.php';

echo
c\html(
    c\body(
        c\trepeat(
            'ul',
            'li',
            array(
                'one',
                'two',
                'three')),

        c\trepeat(
            'ol',
            'li',
            array(
                'four',
                'five',
                'six'),
            array(
                'type' => 'i'))));
