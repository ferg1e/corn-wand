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

/**
 * Convert an array into a string of HTML
 * attributes. The array key is the attribute
 * name and the array value is the attribute
 * value. If the array key is an integer then
 * only the value will show. Empty string values
 * with an integer key are ignored. The attribute
 * value is escaped. The attribute name is not
 * escaped. Attribute values with a name are
 * wrapped in double quotes. The return value
 * always has a leading space if there's at
 * least one attribute.
 *
 * @param array $attrs an array of attributes
 *
 * @return string attributes as a string
 */
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

/**
 * Get any HTML tag with attributes and
 * content inside. If the second argument
 * is an array then it will be used
 * as the tag attributes. Otherwise all
 * arguments besides the first are
 * concatenated together to form the tag
 * content. If there are no content arguments
 * then the tag will self close.
 *
 * @param string $name tag name
 * @param mixed $args,... unlimited optional
 *     arguments for the tag attributes and
 *     content
 *
 * @return string complete tag
 */
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

/**
 * Same as c\tag() but the unlimited
 * optional arguments after the name
 * argument are in an array.
 *
 * @param string $name tag name
 * @param array $array the tag
 *     attributes and content
 *
 * @return string complete tag
 */
function unpack_tag($name, array $array) {
    array_unshift($array, $name);
    return call_user_func_array('c\tag', $array);
}

/**
 * Same as c\tag() but with name set to 'html'
 * @param mixed $args,... unlimited optional
 * @return string <html> tag
 */
function html() {
    return unpack_tag('html', func_get_args());
}

/**
 * Same as c\tag() but with name set to 'head'
 * @param mixed $args,... unlimited optional
 * @return string <head> tag
 */
function head() {
    return unpack_tag('head', func_get_args());
}

/**
 * Same as c\tag() but with name set to 'title'
 * @param mixed $args,... unlimited optional
 * @return string <title> tag
 */
function title() {
    return unpack_tag('title', func_get_args());
}

/**
 * Same as c\tag() but with name set to 'base'
 * @param mixed $args,... unlimited optional
 * @return string <base> tag
 */
function base() {
    return unpack_tag('base', func_get_args());
}

/**
 * Same as c\tag() but with name set to 'link'
 * @param mixed $args,... unlimited optional
 * @return string <link> tag
 */
function link() {
    return unpack_tag('link', func_get_args());
}

/**
 * Same as c\tag() but with name set to 'meta'
 * @param mixed $args,... unlimited optional
 * @return string <meta> tag
 */
function meta() {
    return unpack_tag('meta', func_get_args());
}

/**
 * Same as c\tag() but with name set to 'style'
 * @param mixed $args,... unlimited optional
 * @return string <style> tag
 */
function style() {
    return unpack_tag('style', func_get_args());
}

/**
 * Same as c\tag() but with name set to 'script'
 * @param mixed $args,... unlimited optional
 * @return string <script> tag
 */
function script() {
    return unpack_tag('script', func_get_args());
}

/**
 * Same as c\tag() but with name set to 'noscript'
 * @param mixed $args,... unlimited optional
 * @return string <noscript> tag
 */
function noscript() {
    return unpack_tag('noscript', func_get_args());
}

/**
 * Same as c\tag() but with name set to 'body'
 * @param mixed $args,... unlimited optional
 * @return string <body> tag
 */
function body() {
    return unpack_tag('body', func_get_args());
}

/**
 * Same as c\tag() but with name set to 'h1'
 * @param mixed $args,... unlimited optional
 * @return string <h1> tag
 */
function h1() {
    return unpack_tag('h1', func_get_args());
}

/**
 * Same as c\tag() but with name set to 'h2'
 * @param mixed $args,... unlimited optional
 * @return string <h2> tag
 */
function h2() {
    return unpack_tag('h2', func_get_args());
}

/**
 * Same as c\tag() but with name set to 'h3'
 * @param mixed $args,... unlimited optional
 * @return string <h3> tag
 */
function h3() {
    return unpack_tag('h3', func_get_args());
}

/**
 * Same as c\tag() but with name set to 'h4'
 * @param mixed $args,... unlimited optional
 * @return string <h4> tag
 */
function h4() {
    return unpack_tag('h4', func_get_args());
}

/**
 * Same as c\tag() but with name set to 'h5'
 * @param mixed $args,... unlimited optional
 * @return string <h5> tag
 */
function h5() {
    return unpack_tag('h5', func_get_args());
}

/**
 * Same as c\tag() but with name set to 'h6'
 * @param mixed $args,... unlimited optional
 * @return string <h6> tag
 */
function h6() {
    return unpack_tag('h6', func_get_args());
}

/**
 * Same as c\tag() but with name set to 'p'
 * @param mixed $args,... unlimited optional
 * @return string <p> tag
 */
function p() {
    return unpack_tag('p', func_get_args());
}

/**
 * Same as c\tag() but with name set to 'hr'
 * @param mixed $args,... unlimited optional
 * @return string <hr> tag
 */
function hr() {
    return unpack_tag('hr', func_get_args());
}

/**
 * Same as c\tag() but with name set to 'pre'
 * @param mixed $args,... unlimited optional
 * @return string <pre> tag
 */
function pre() {
    return unpack_tag('pre', func_get_args());
}

/**
 * Same as c\tag() but with name set to 'blockquote'
 * @param mixed $args,... unlimited optional
 * @return string <blockquote> tag
 */
function blockquote() {
    return unpack_tag('blockquote', func_get_args());
}

/**
 * Same as c\tag() but with name set to 'ol'
 * @param mixed $args,... unlimited optional
 * @return string <ol> tag
 */
function ol() {
    return unpack_tag('ol', func_get_args());
}

/**
 * Same as c\tag() but with name set to 'ul'
 * @param mixed $args,... unlimited optional
 * @return string <ul> tag
 */
function ul() {
    return unpack_tag('ul', func_get_args());
}

/**
 * Same as c\tag() but with name set to 'li'
 * @param mixed $args,... unlimited optional
 * @return string <li> tag
 */
function li() {
    return unpack_tag('li', func_get_args());
}

/**
 * Same as c\tag() but with name set to 'dl'
 * @param mixed $args,... unlimited optional
 * @return string <dl> tag
 */
function dl() {
    return unpack_tag('dl', func_get_args());
}

/**
 * Same as c\tag() but with name set to 'dt'
 * @param mixed $args,... unlimited optional
 * @return string <dt> tag
 */
function dt() {
    return unpack_tag('dt', func_get_args());
}

/**
 * Same as c\tag() but with name set to 'dd'
 * @param mixed $args,... unlimited optional
 * @return string <dd> tag
 */
function dd() {
    return unpack_tag('dd', func_get_args());
}

/**
 * Same as c\tag() but with name set to 'div'
 * @param mixed $args,... unlimited optional
 * @return string <div> tag
 */
function div() {
    return unpack_tag('div', func_get_args());
}

/**
 * Same as c\tag() but with name set to 'a'
 * @param mixed $args,... unlimited optional
 * @return string <a> tag
 */
function a() {
    return unpack_tag('a', func_get_args());
}

/**
 * Same as c\tag() but with name set to 'em'
 * @param mixed $args,... unlimited optional
 * @return string <em> tag
 */
function em() {
    return unpack_tag('em', func_get_args());
}

/**
 * Same as c\tag() but with name set to 'strong'
 * @param mixed $args,... unlimited optional
 * @return string <strong> tag
 */
function strong() {
    return unpack_tag('strong', func_get_args());
}

function html5() {
    return '<!doctype html>' . unpack_tag('html', func_get_args());
}

function css($url) {
    return link(array(
        'rel' => 'stylesheet',
        'href' => $url));
}
