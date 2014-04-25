<?php

require '../src/corn-wand.php';

echo
    c\html5(
        c\body(
            c\blockquote(
                array('cite' => 'https://google.com/'),
                "I'm feeling lucky")));
