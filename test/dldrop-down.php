<?php

require '../src/corn-wand.php';

echo 
    c\html5(
        c\body(
            c\dldrop_down(
                'Cities',
                array(
                    'Barcelona',
                    'Horta',
                    'Madrid')),

            c\dldrop_down(
                'Movies',
                array(
                    'Fargo',
                    'Largo',
                    'Soap',
                    'Rope'),
                array(
                    'id' => 'movie')),

            c\dldrop_down(
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

            c\dldrop_down(
                'Types',
                array(
                    's' => 'small',
                    'r' => 'red'),
                array('id' => 'xtype'),
                null,
                array('style' => 'border:1px red solid')),

            c\dldrop_down(
                c\u('drink'),
                array(
                    'Water',
                    'Wine',
                    'OJ',
                    'Milk'),
                array('id' => 'drink'),
                1,
                array('style' => 'font-size:3em'),
                array('style' => 'background:#ffaaaa;padding:2em'))));
