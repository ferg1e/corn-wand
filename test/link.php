<?php

require '../src/corn-wand.php';

echo
    c\html5(
        c\head(
            c\link(array(
                'rel' => 'stylesheet',
                'href' => 'css/link.css'))),
        c\body(
            c\tag(
                'div',
                array('id' => 'fun'),
                'Happy happy, joy joy')));
