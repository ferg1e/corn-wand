<?php

require '../src/corn-wand.php';

echo
    c\html5(
        c\body(
            c\ulist(
                array(
                    'one',
                    'two',
                    'three')),

            c\ulist(
                'one',
                'two',
                'three'),

            c\ulist(
                array(
                    'four',
                    'five',
                    'six'),
                array('style' => 'background:#ddeeee')),

            c\ulist(
                'four',
                'five',
                'six',
                array('style' => 'background:#eeeedd')),

            c\ulist(
                array(
                    'seven' => array('style' => 'color:brown'),
                    'eight' => array('style' => 'font-size:2em'),
                    'nine'))));
