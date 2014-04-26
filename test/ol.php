<?php

require '../src/corn-wand.php';

echo
    c\html5(
        c\body(
            c\ol(
                c\li('apple'),
                c\li('banana'),
                c\li(
                    array('style' => 'color:orange;'),
                    'orange'))));
