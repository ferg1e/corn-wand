<?php

require '../src/corn-wand.php';

echo
    c\html5(
        c\body(
            c\p('paragraph one'),
            c\hr(),
            c\p('paragraph two')));
