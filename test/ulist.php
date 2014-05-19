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
                array(
                    'four',
                    'five',
                    'six'),
                array('style' => 'background:#ddeeee')),

            c\ulist(
                array(
                    'seven',
                    'eight' => array('style' => 'font-size:2em'),
                    'nine',
                    'ten' => array('style' => 'color:red')))));
