<?php

require '../src/corn-wand.php';

echo 
    c\html5(
        c\body(
            c\soption(
                array(
                    'zero',
                    'one',
                    'two')),
            c\soption(
                array(
                    'g' => 'gold',
                    's' => '"silver"',
                    'b' => '<bronze/>'),
                array(
                    'name' => 'medal',
                    'multiple')),
            c\soption(
                array(
                    'past',
                    'present',
                    'future'),
                array('name' => 'time'),
                2)));
