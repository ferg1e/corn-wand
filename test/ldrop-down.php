<?php

require '../src/corn-wand.php';

echo 
    c\html5(
        c\body(
            c\ldrop_down(
                'Cities',
                array(
                    'Barcelona',
                    'Horta',
                    'Madrid')),

            c\ldrop_down(
                'Movies',
                array(
                    'Fargo',
                    'Largo',
                    'Soap',
                    'Rope'),
                array(
                    'id' => 'movie')),

            c\ldrop_down(
                'Hellos',
                array(
                    1 => 'Hi',
                    'Yo',
                    "What's Up?",
                    'Howz it?'),
                array(
                    'id' => 'hellos',
                    'multiple'),
                array(1, 4)),

            c\ldrop_down(
                'Types',
                array(
                    's' => 'small',
                    'r' => 'red'),
                array('name' => 'xtype'),
                null,
                array(
                    'style' => 'border:20px red ridge'))));
