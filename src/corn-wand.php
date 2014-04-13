<?php

namespace c;

function esc($string) {
    return htmlspecialchars($string);
}

function attrs(array $attrs) {
    ob_start();

    foreach($attrs as $i => $v) {
        $v = esc($v);

        if(is_int($i) && $v !== '') {
            print " $v";
        }
        else if(!is_int($i)) {
            print " $i=\"$v\"";
        }
    }

    return ob_get_clean();
}
