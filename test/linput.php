<?php

require '../src/corn-wand.php';

echo 
    c\html5(
        c\body(
            c\linput(
                'Input 1'),
            c\linput(
                'Input 2',
                array('id' => 'input2')),
            c\linput(
                'Input 3',
                array('id' => 'input3'),
                array('style' => 'font-size:2em'))));
