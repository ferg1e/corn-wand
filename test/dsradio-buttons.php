<?php

require '../src/corn-wand.php';

echo 
    c\html5(
        c\head(
            c\css('css/dsradio-buttons.css')),
        c\body(
            c\dsradio_buttons(
                'What is 2 + 2?',
                'q1',
                array(
                    '0',
                    '2',
                    '4',
                    '22')),

            c\dsradio_buttons(
                'How many pounds in a ton?',
                'q2',
                array(
                    '500',
                    '1,000',
                    '2,000',
                    '10,000'),
                2),

            c\dsradio_buttons(
                'What is the capital of Norway?',
                'q3',
                array(
                    'Oslo',
                    'Berlin',
                    'Stockholm',
                    'Lillehammer'),
                null,
                array('style' => 'background:#eeeecc'))));
