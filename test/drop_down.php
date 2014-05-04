<?php

require '../src/corn-wand.php';

echo 
    c\html5(
        c\body(
            c\drop_down(
                array(
                    'zero',
                    'one',
                    'two')),
            c\drop_down(
                array(
                    'g' => 'gold',
                    's' => '"silver"',
                    'b' => '<bronze/>'),
                array(
                    'name' => 'medal',
                    'multiple')),
            c\drop_down(
                array(
                    'past',
                    'present',
                    'future'),
                array('name' => 'time'),
                2)));
