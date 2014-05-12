<?php

require '../src/corn-wand.php';

echo 
    c\html5(
        c\body(
            c\sradio_buttons(
                'Boats',
                'boats',
                array(
                    'tug',
                    'sail',
                    'speed')),

            c\br(),

            c\sradio_buttons(
                'Coats',
                'coats',
                array(
                    'fur' => 'Fur',
                    'rain' => 'Rain',
                    'trench' => 'Trench'),
                'fur')));
