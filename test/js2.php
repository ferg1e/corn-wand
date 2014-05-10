<?php

require '../src/corn-wand.php';

$js = array();
$js[] = 'js/js1.js';
$js[] = 'js/js2.js';

echo
    c\html5(
        c\head(
            c\js($js),
            c\style(
                'input {
                    font-size:2em;
                }')),
        c\body(
            c\input(array(
                'type' => 'button',
                'value' => 'Button A',
                'onclick' => 'clickA()')),
            c\input(array(
                'type' => 'button',
                'value' => 'Button B',
                'onclick' => 'clickB()'))));
