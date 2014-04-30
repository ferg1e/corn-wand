<?php

require '../src/corn-wand.php';

echo 
    c\html5(
        c\body(
            c\ltextarea(
                'Input 1'),
            c\ltextarea(
                'Input 2',
                array('id' => 'input2')),
            c\ltextarea(
                'Input 3',
                array('id' => 'input3'),
                'an <apple/> "a" day'),
            c\ltextarea(
                'Input 4',
                array('id' => 'input4'),
                '',
                array('style' => 'font-weight:bold'))));
