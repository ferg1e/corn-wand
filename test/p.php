<?php

require '../src/corn-wand.php';

echo
    c\html(
        c\body(
            c\p('It was the best of times.'),
            c\p(array('style' => 'color:red'),
                'one ',
                'two ',
                'three')));
