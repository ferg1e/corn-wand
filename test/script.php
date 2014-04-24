<?php

require '../src/corn-wand.php';

echo
    c\html(
        c\head(
            c\script('
                function beep() {
                    alert("beep beep");
                }')),
        c\body(
            array('onload' => 'beep()'),
            'should see a beep beep alert'));
