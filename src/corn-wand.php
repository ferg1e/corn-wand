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

function tag($name) {
    $args = func_get_args();
    $attrs = (count($args) > 1 && is_array($args[1]))
        ? attrs($args[1])
        : '';

    $content = '';

    if(count($args) > 1 && !is_array($args[1])) {
        $content = implode(array_slice($args, 1));
    }
    else if(count($args) > 2) {
        $content = implode(array_slice($args, 2));
    }

    return ($content !== '')
        ? "<$name$attrs>$content</$name>"
        : "<$name$attrs/>";
}

function unpack_tag($name, array $array) {
    array_unshift($array, $name);
    return call_user_func_array('c\tag', $array);
}

function html() {
    return unpack_tag('html', func_get_args());
}

function head() {
    return unpack_tag('head', func_get_args());
}
