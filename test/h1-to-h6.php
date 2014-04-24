<?php

require '../src/corn-wand.php';

echo
    c\html(
        c\body(
            c\h1('heading level 1'),
            c\h2('heading level 2'),
            c\h3('heading level 3'),
            c\h4('heading level 4'),
            c\h5('heading level 5'),
            c\h6('heading level 6')));
