<?php

require '../src/corn-wand.php';

echo
    c\html(
        c\body(
            c\p('if javascript is off,
                then you should see
                something below this'),
            c\noscript('something')));
