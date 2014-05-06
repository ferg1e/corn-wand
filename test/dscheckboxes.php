<?php

require '../src/corn-wand.php';

echo 
    c\html5(
        c\head(
            c\css('css/dscheckboxes.css')),
        c\body(
            c\dscheckboxes(
                'Clubs',
                'clubs',
                array(
                    'night',
                    'spiked',
                    'golf',
                    'bridge')),

            c\dscheckboxes(
                'Shapes',
                'shapes',
                array(
                    'circ' => 'circle',
                    'rect' => 'rectangle',
                    'tri' => 'triangle'),
                array('tri')),

            c\dscheckboxes(
                'Tapes',
                'tapes',
                array(
                    1 => 'Measure',
                    'Cassett',
                    'Sticky',
                    'Electric'),
                array(),
                array('style' => 'font-size:2em'))));
