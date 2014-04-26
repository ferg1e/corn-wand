<?php

require '../src/corn-wand.php';

echo
    c\html5(
        c\body(
            c\dl(
                c\dt('House'),
                c\dd('A place where people live and sleep.'),
                c\dt('Green'),
                c\dt('Blue'),
                c\dd('Colors of the rainbow.'))));
