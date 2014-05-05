<?php

require '../src/corn-wand.php';

echo 
    c\html5(
        c\body(
            c\scheckboxes(
                'Sports',
                'sports',
                array(
                    'Golf',
                    'Soccer',
                    'Tennis')),

            c\hr(),

            c\scheckboxes(
                'Ports',
                'ports',
                array(
                    'usb' => 'USB',
                    'vga' => 'VGA',
                    'hdmi' => 'HDMI'),
                array('hdmi'))));
