<?php

require '../src/corn-wand.php';

echo 
    c\html5(
        c\head(
            c\css('css/radio-buttons.css')),
        c\body(
            c\radio_buttons(
                'shirts',
                array(
                    'short sleeve',
                    'long sleeve',
                    'tank top',
                    'crop top')),

            c\hr(),

            c\radio_buttons(
                'pants',
                array(
                    'c' => 'cargo pants',
                    'b' => 'bell bottoms',
                    's' => 'skinny jeans'),
                's')));
