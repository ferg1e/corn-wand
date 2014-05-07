<?php

require '../src/corn-wand.php';

echo
    c\html5(
        c\head(
            c\js(
                'js/js1.js',
                'js/js2.js')),
        c\body(
            c\input(array(
                'type' => 'button',
                'value' => 'Button A',
                'onclick' => 'clickA()')),
            c\input(array(
                'type' => 'button',
                'value' => 'Button B',
                'onclick' => 'clickB()'))));
