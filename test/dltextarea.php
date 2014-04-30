<?php

require '../src/corn-wand.php';

echo 
    c\html5(
        c\body(
            c\dltextarea(
                'Input 1'),
            c\dltextarea(
                'Input 2',
                array(
                    'id' => 'input2',
                    'style' => 'width:24em')),
            c\dltextarea(
                c\em('Input 3'),
                array('id' => 'input3'),
                '<an> apple a "day"'),
            c\dltextarea(
                'Input 4',
                array('id' => 'input4'),
                '',
                array('style' => 'color:pink')),
            c\dltextarea(
                'Input 5',
                array('id' => 'input5'),
                '',
                array(),
                array('style' => 'background:#dddddd'))));
