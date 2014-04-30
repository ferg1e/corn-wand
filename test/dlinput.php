<?php

require '../src/corn-wand.php';

echo 
    c\html5(
        c\body(
            c\dlinput(
                'Input 1'),
            c\dlinput(
                'Input 2',
                array('id' => 'input2')),
            c\dlinput(
                'Input 3',
                array('id' => 'input3'),
                array('style' => 'background:#ffffbb')),
            c\dlinput(
                'Input 4',
                array(
                    'id' => 'input4',
                    'type' => 'radio'),
                array('style' => 'color:blue'),
                array('style' => 'margin-top:5em'))));
