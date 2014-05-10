<?php

require '../src/corn-wand.php';

$css = array();
$css[] = 'css/css1.css';
$css[] = 'css/css2.css';

echo
    c\html5(
        c\head(
            c\css($css)),
        c\body(
            c\div(
                array('id' => 'heart'),
                'The Bart of a champion.'),
            c\p('The Bart of a bampion.')));
