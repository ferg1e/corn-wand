<?php

require '../src/corn-wand.php';

echo
    c\html5(
        c\body(
            c\olist(
                array(
                    'Monday',
                    'Tuesday',
                    'Wednesday')),

            c\olist(
                array(
                    'Tim',
                    'Tom',
                    'Tam',
                    'Tum',
                    'Tem'),
                array('type' => 'I')),

            c\olist(
                array(
                    'Jake',
                    'Jill' => array('style' => 'color:orange'),
                    'Jon',
                    'Judy' => array('style' => 'font-size:1.5em')))));
