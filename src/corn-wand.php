<?php

/**
 * @author Ry Ferguson
 * @license MIT
 */

namespace c;

/**
 * Alias for htmlspecialchars()
 *
 * @param string $string string to escape
 *
 * @return string escaped string
 */
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

    $content = null;

    if(count($args) > 1 && !is_array($args[1])) {
        $content = implode(array_slice($args, 1));
    }
    else if(count($args) > 2) {
        $content = implode(array_slice($args, 2));
    }

    return (!is_null($content))
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

function title() {
    return unpack_tag('title', func_get_args());
}

function base() {
    return unpack_tag('base', func_get_args());
}

function link() {
    return unpack_tag('link', func_get_args());
}

function meta() {
    return unpack_tag('meta', func_get_args());
}

function body() {
    return unpack_tag('body', func_get_args());
}

function p() {
    return unpack_tag('p', func_get_args());
}

function div() {
    return unpack_tag('div', func_get_args());
}

function html5() {
    return '<!doctype html>' . unpack_tag('html', func_get_args());
}

function css($url) {
    return link(array(
        'rel' => 'stylesheet',
        'href' => $url));
}
