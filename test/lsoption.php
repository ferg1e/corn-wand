<?php

require '../src/corn-wand.php';

echo 
    c\html5(
        c\body(
            c\lsoption(
                'Cities',
                array(
                    'Barcelona',
                    'Horta',
                    'Madrid')),

            c\lsoption(
                'Movies',
                array(
                    'Fargo',
                    'Largo',
                    'Soap',
                    'Rope'),
                array(
                    'id' => 'movie')),

            c\lsoption(
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

            c\lsoption(
                'Types',
                array(
                    's' => 'small',
                    'r' => 'red'),
                array('id' => 'xtype'),
                null,
                array(
                    'style' => 'border:20px red ridge'))));
