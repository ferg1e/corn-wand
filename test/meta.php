<?php

require '../src/corn-wand.php';

echo
    c\html(
        c\head(
            c\meta(array(
                'name' => 'description',
                'content' => 'meta() test.'))),
        c\body('this is not a test, jk'));
