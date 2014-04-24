<?php

require '../src/corn-wand.php';

echo
    c\html(
        c\head(
            c\style('body{color:orange;}')),
        c\body('I send this smile over to you.'));
