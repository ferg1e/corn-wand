<?php

require '../src/corn-wand.php';

echo 
    c\html5(
        c\body(
            c\checkboxes(
                'bills',
                array(
                    'single',
                    'five',
                    'ten',
                    'bill',
                    '1g')),

            c\hr(),

            c\checkboxes(
                'thrills',
                array(
                    'run' => c\strong('run'),
                    'jump' => 'jump',
                    'swim' => 'swim'),
                array('run', 'swim'))));
