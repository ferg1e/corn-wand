<?php

require '../src/corn-wand.php';

echo
    c\html5(
        c\head(
            c\base(array('href' => 'css/')),
            c\css('base.css')),
        c\body(
            c\div(
                array('id' => 'lucky'),
                "I'd rather be lucky than good.")));
