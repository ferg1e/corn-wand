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
 * @return string complete tag
 */
function unpack_tag($name, array $array) {
    array_unshift($array, $name);
    return call_user_func_array('c\tag', $array);
}

/** @see c\tag() same but name is 'a' */
function a() {
    return unpack_tag('a', func_get_args());
}

/** @see c\tag() same but name is 'abbr' */
function abbr() {
    return unpack_tag('abbr', func_get_args());
}

/** @see c\tag() same but name is 'address' */
function address() {
    return unpack_tag('address', func_get_args());
}

/** @see c\tag() same but name is 'area' */
function area() {
    return unpack_tag('area', func_get_args());
}

/** @see c\tag() same but name is 'article' */
function article() {
    return unpack_tag('article', func_get_args());
}

/** @see c\tag() same but name is 'aside' */
function aside() {
    return unpack_tag('aside', func_get_args());
}

/** @see c\tag() same but name is 'audio' */
function audio() {
    return unpack_tag('audio', func_get_args());
}

/** @see c\tag() same but name is 'b' */
function b() {
    return unpack_tag('b', func_get_args());
}

/** @see c\tag() same but name is 'base' */
function base() {
    return unpack_tag('base', func_get_args());
}

/** @see c\tag() same but name is 'bdi' */
function bdi() {
    return unpack_tag('bdi', func_get_args());
}

/** @see c\tag() same but name is 'bdo' */
function bdo() {
    return unpack_tag('bdo', func_get_args());
}

/** @see c\tag() same but name is 'blockquote' */
function blockquote() {
    return unpack_tag('blockquote', func_get_args());
}

/** @see c\tag() same but name is 'body' */
function body() {
    return unpack_tag('body', func_get_args());
}

/** @see c\tag() same but name is 'br' */
function br() {
    return unpack_tag('br', func_get_args());
}

/** @see c\tag() same but name is 'button' */
function button() {
    return unpack_tag('button', func_get_args());
}

/** @see c\tag() same but name is 'canvas' */
function canvas() {
    return unpack_tag('canvas', func_get_args());
}

/** @see c\tag() same but name is 'caption' */
function caption() {
    return unpack_tag('caption', func_get_args());
}

/** @see c\tag() same but name is 'cite' */
function cite() {
    return unpack_tag('cite', func_get_args());
}

/** @see c\tag() same but name is 'code' */
function code() {
    return unpack_tag('code', func_get_args());
}

/** @see c\tag() same but name is 'col' */
function col() {
    return unpack_tag('col', func_get_args());
}

/** @see c\tag() same but name is 'colgroup' */
function colgroup() {
    return unpack_tag('colgroup', func_get_args());
}

/** @see c\tag() same but name is 'content' */
function content() {
    return unpack_tag('content', func_get_args());
}

/** @see c\tag() same but name is 'data' */
function data() {
    return unpack_tag('data', func_get_args());
}

/** @see c\tag() same but name is 'datalist' */
function datalist() {
    return unpack_tag('datalist', func_get_args());
}

/** @see c\tag() same but name is 'dd' */
function dd() {
    return unpack_tag('dd', func_get_args());
}

/** @see c\tag() same but name is 'decorator' */
function decorator() {
    return unpack_tag('decorator', func_get_args());
}

/** @see c\tag() same but name is 'del' */
function del() {
    return unpack_tag('del', func_get_args());
}

/** @see c\tag() same but name is 'details' */
function details() {
    return unpack_tag('details', func_get_args());
}

/** @see c\tag() same but name is 'dfn' */
function dfn() {
    return unpack_tag('dfn', func_get_args());
}

/** @see c\tag() same but name is 'div' */
function div() {
    return unpack_tag('div', func_get_args());
}

/** @see c\tag() same but name is 'dl' */
function dl() {
    return unpack_tag('dl', func_get_args());
}

/** @see c\tag() same but name is 'dt' */
function dt() {
    return unpack_tag('dt', func_get_args());
}

/** @see c\tag() same but name is 'element' */
function element() {
    return unpack_tag('element', func_get_args());
}

/** @see c\tag() same but name is 'em' */
function em() {
    return unpack_tag('em', func_get_args());
}

/** @see c\tag() same but name is 'embed' */
function embed() {
    return unpack_tag('embed', func_get_args());
}

/** @see c\tag() same but name is 'fieldset' */
function fieldset() {
    return unpack_tag('fieldset', func_get_args());
}

/** @see c\tag() same but name is 'figcaption' */
function figcaption() {
    return unpack_tag('figcaption', func_get_args());
}

/** @see c\tag() same but name is 'figure' */
function figure() {
    return unpack_tag('figure', func_get_args());
}

/** @see c\tag() same but name is 'footer' */
function footer() {
    return unpack_tag('footer', func_get_args());
}

/** @see c\tag() same but name is 'form' */
function form() {
    return unpack_tag('form', func_get_args());
}

/** @see c\tag() same but name is 'h1' */
function h1() {
    return unpack_tag('h1', func_get_args());
}

/** @see c\tag() same but name is 'h2' */
function h2() {
    return unpack_tag('h2', func_get_args());
}

/** @see c\tag() same but name is 'h3' */
function h3() {
    return unpack_tag('h3', func_get_args());
}

/** @see c\tag() same but name is 'h4' */
function h4() {
    return unpack_tag('h4', func_get_args());
}

/** @see c\tag() same but name is 'h5' */
function h5() {
    return unpack_tag('h5', func_get_args());
}

/** @see c\tag() same but name is 'h6' */
function h6() {
    return unpack_tag('h6', func_get_args());
}

/** @see c\tag() same but name is 'head' */
function head() {
    return unpack_tag('head', func_get_args());
}

/** @see c\tag() same but name is 'header' */
function header() {
    return unpack_tag('header', func_get_args());
}

/** @see c\tag() same but name is 'hr' */
function hr() {
    return unpack_tag('hr', func_get_args());
}

/** @see c\tag() same but name is 'html' */
function html() {
    return unpack_tag('html', func_get_args());
}

/** @see c\tag() same but name is 'i' */
function i() {
    return unpack_tag('i', func_get_args());
}

/** @see c\tag() same but name is 'iframe' */
function iframe() {
    return unpack_tag('iframe', func_get_args());
}

/** @see c\tag() same but name is 'img' */
function img() {
    return unpack_tag('img', func_get_args());
}

/** @see c\tag() same but name is 'input' */
function input() {
    return unpack_tag('input', func_get_args());
}

/** @see c\tag() same but name is 'ins' */
function ins() {
    return unpack_tag('ins', func_get_args());
}

/** @see c\tag() same but name is 'kbd' */
function kbd() {
    return unpack_tag('kbd', func_get_args());
}

/** @see c\tag() same but name is 'keygen' */
function keygen() {
    return unpack_tag('keygen', func_get_args());
}

/** @see c\tag() same but name is 'label' */
function label() {
    return unpack_tag('label', func_get_args());
}

/** @see c\tag() same but name is 'legend' */
function legend() {
    return unpack_tag('legend', func_get_args());
}

/** @see c\tag() same but name is 'li' */
function li() {
    return unpack_tag('li', func_get_args());
}

/** @see c\tag() same but name is 'link' */
function link() {
    return unpack_tag('link', func_get_args());
}

/** @see c\tag() same but name is 'main' */
function main() {
    return unpack_tag('main', func_get_args());
}

/** @see c\tag() same but name is 'map' */
function map() {
    return unpack_tag('map', func_get_args());
}

/** @see c\tag() same but name is 'mark' */
function mark() {
    return unpack_tag('mark', func_get_args());
}

/** @see c\tag() same but name is 'math' */
function math() {
    return unpack_tag('math', func_get_args());
}

/** @see c\tag() same but name is 'menu' */
function menu() {
    return unpack_tag('menu', func_get_args());
}

/** @see c\tag() same but name is 'menuitem' */
function menuitem() {
    return unpack_tag('menuitem', func_get_args());
}

/** @see c\tag() same but name is 'meta' */
function meta() {
    return unpack_tag('meta', func_get_args());
}

/** @see c\tag() same but name is 'meter' */
function meter() {
    return unpack_tag('meter', func_get_args());
}

/** @see c\tag() same but name is 'nav' */
function nav() {
    return unpack_tag('nav', func_get_args());
}

/** @see c\tag() same but name is 'noscript' */
function noscript() {
    return unpack_tag('noscript', func_get_args());
}

/** @see c\tag() same but name is 'object' */
function object() {
    return unpack_tag('object', func_get_args());
}

/** @see c\tag() same but name is 'ol' */
function ol() {
    return unpack_tag('ol', func_get_args());
}

/** @see c\tag() same but name is 'optgroup' */
function optgroup() {
    return unpack_tag('optgroup', func_get_args());
}

/** @see c\tag() same but name is 'option' */
function option() {
    return unpack_tag('option', func_get_args());
}

/** @see c\tag() same but name is 'output' */
function output() {
    return unpack_tag('output', func_get_args());
}

/** @see c\tag() same but name is 'p' */
function p() {
    return unpack_tag('p', func_get_args());
}

/** @see c\tag() same but name is 'param' */
function param() {
    return unpack_tag('param', func_get_args());
}

/** @see c\tag() same but name is 'pre' */
function pre() {
    return unpack_tag('pre', func_get_args());
}

/** @see c\tag() same but name is 'progress' */
function progress() {
    return unpack_tag('progress', func_get_args());
}

/** @see c\tag() same but name is 'q' */
function q() {
    return unpack_tag('q', func_get_args());
}

/** @see c\tag() same but name is 'rp' */
function rp() {
    return unpack_tag('rp', func_get_args());
}

/** @see c\tag() same but name is 'rt' */
function rt() {
    return unpack_tag('rt', func_get_args());
}

/** @see c\tag() same but name is 'ruby' */
function ruby() {
    return unpack_tag('ruby', func_get_args());
}

/** @see c\tag() same but name is 's' */
function s() {
    return unpack_tag('s', func_get_args());
}

/** @see c\tag() same but name is 'samp' */
function samp() {
    return unpack_tag('samp', func_get_args());
}

/** @see c\tag() same but name is 'script' */
function script() {
    return unpack_tag('script', func_get_args());
}

/** @see c\tag() same but name is 'section' */
function section() {
    return unpack_tag('section', func_get_args());
}

/** @see c\tag() same but name is 'select' */
function select() {
    return unpack_tag('select', func_get_args());
}

/** @see c\tag() same but name is 'shadow' */
function shadow() {
    return unpack_tag('shadow', func_get_args());
}

/** @see c\tag() same but name is 'small' */
function small() {
    return unpack_tag('small', func_get_args());
}

/** @see c\tag() same but name is 'source' */
function source() {
    return unpack_tag('source', func_get_args());
}

/** @see c\tag() same but name is 'span' */
function span() {
    return unpack_tag('span', func_get_args());
}

/** @see c\tag() same but name is 'strong' */
function strong() {
    return unpack_tag('strong', func_get_args());
}

/** @see c\tag() same but name is 'style' */
function style() {
    return unpack_tag('style', func_get_args());
}

/** @see c\tag() same but name is 'sub' */
function sub() {
    return unpack_tag('sub', func_get_args());
}

/** @see c\tag() same but name is 'summary' */
function summary() {
    return unpack_tag('summary', func_get_args());
}

/** @see c\tag() same but name is 'sup' */
function sup() {
    return unpack_tag('sup', func_get_args());
}

/** @see c\tag() same but name is 'svg' */
function svg() {
    return unpack_tag('svg', func_get_args());
}

/** @see c\tag() same but name is 'table' */
function table() {
    return unpack_tag('table', func_get_args());
}

/** @see c\tag() same but name is 'tbody' */
function tbody() {
    return unpack_tag('tbody', func_get_args());
}

/** @see c\tag() same but name is 'td' */
function td() {
    return unpack_tag('td', func_get_args());
}

/** @see c\tag() same but name is 'template' */
function template() {
    return unpack_tag('template', func_get_args());
}

/** @see c\tag() same but name is 'textarea' */
function textarea() {
    return unpack_tag('textarea', func_get_args());
}

/** @see c\tag() same but name is 'tfoot' */
function tfoot() {
    return unpack_tag('tfoot', func_get_args());
}

/** @see c\tag() same but name is 'th' */
function th() {
    return unpack_tag('th', func_get_args());
}

/** @see c\tag() same but name is 'thead' */
function thead() {
    return unpack_tag('thead', func_get_args());
}

/** @see c\tag() same but name is 'time' */
function time() {
    return unpack_tag('time', func_get_args());
}

/** @see c\tag() same but name is 'title' */
function title() {
    return unpack_tag('title', func_get_args());
}

/** @see c\tag() same but name is 'tr' */
function tr() {
    return unpack_tag('tr', func_get_args());
}

/** @see c\tag() same but name is 'track' */
function track() {
    return unpack_tag('track', func_get_args());
}

/** @see c\tag() same but name is 'u' */
function u() {
    return unpack_tag('u', func_get_args());
}

/** @see c\tag() same but name is 'ul' */
function ul() {
    return unpack_tag('ul', func_get_args());
}

/** @see c\tag() same but name is 'var' */
function _var() {
    return unpack_tag('var', func_get_args());
}

/** @see c\tag() same but name is 'video' */
function video() {
    return unpack_tag('video', func_get_args());
}

/** @see c\tag() same but name is 'wbr' */
function wbr() {
    return unpack_tag('wbr', func_get_args());
}

/**
 * @see c\html() same but with HTML5 doctype
 * prepended.
 */
function html5() {
    return '<!doctype html>' . unpack_tag('html', func_get_args());
}

/**
 * Get a string that is link tags for CSS
 * files.
 *
 * @param mixed $args,... unlimited. If
 *     the first argument is an array, then
 *     all the CSS URLs are that array.
 *     Otherwise all the CSS URLs are the
 *     function arguments.
 * @return string the link tags for each
 *     CSS file
 */
function css() {
    $args = func_get_args();
    $urls = (count($args) > 0 && is_array($args[0]))
        ? $args[0]
        : $args;

    ob_start();

    foreach($urls as $url) {
        print link(array(
            'rel' => 'stylesheet',
            'href' => $url));
    }

    return ob_get_clean();
}

/**
 * Get a string that is script tags for 
 * JavaScript files.
 *
 * @param mixed $args,... unlimited. If
 *     the first argument is an array, then
 *     all the JavaScript URLs are that
 *     array. Otherwise all the JavaScript
 *     URLs are the function arguments.
 * @return string the script tags for each
 *     JavaScript file
 */
function js() {
    $args = func_get_args();
    $urls = (count($args) > 0 && is_array($args[0]))
        ? $args[0]
        : $args;

    ob_start();

    foreach($urls as $url) {
        print script(
            array('src' => $url),
            '');
    }

    return ob_get_clean();
}

/**
 * Get a string that is a label tag and an input
 * tag.
 *
 * @param string $label the content for the label
 *     tag. This value is not escaped.
 * @param array $input_attrs the attributes for the
 *     input tag. These attributes render like in
 *     c\attrs(). If the 'id' key is set then the
 *     following attributes will be set automatically:
 *     the input 'name' will be $id only if 'name'
 *     isn't already set; the label 'id' will be
 *     "l_$id" and the label 'for' will be $id.
 * @param array $label_attrs the attributes for the
 *     label tag. These attributes render like in
 *     c\attrs().
 * @return string a label tag and an input tag
 */
function linput(
    $label,
    array $input_attrs = array(),
    array $label_attrs = array())
{
    if($id = $input_attrs['id']) {
        $input_attrs['name'] = $input_attrs['name']
            ? $input_attrs['name']
            : $id;

        $label_attrs['id'] = "l_$id";
        $label_attrs['for'] = $id;
    }

    return label($label_attrs, $label)
        . input($input_attrs);
}

/**
 * Get a string that is a div containing a label
 * tag and an input tag.
 *
 * @param string $label the content for the label
 *     tag. This value is not escaped.
 * @param array $input_attrs the attributes for the
 *     input tag. These attributes render like in
 *     c\attrs(). If the 'id' key is set then the
 *     following attributes will be set automatically:
 *     the input 'name' will be $id only if 'name'
 *     isn't already set; the label 'id' will be
 *     "l_$id"; the label 'for' will be $id and the
 *     div 'id' will be "c_$id".
 * @param array $label_attrs the attributes for the
 *     label tag. These attributes render like in
 *     c\attrs().
 * @param array $div_attrs the attributes for the
 *     div tag. These attributes render like in
 *     c\attrs().
 * @return string div containing a label tag and an
 *     input tag
 */
function dlinput(
    $label,
    array $input_attrs = array(),
    array $label_attrs = array(),
    array $div_attrs = array())
{
    if($id = $input_attrs['id']) {
        $div_attrs['id'] = "c_$id";
    }

    return div(
        $div_attrs,
        linput($label, $input_attrs, $label_attrs));
            
}

/**
 * Get a string that is a label tag and a textarea
 * tag.
 *
 * @param string $label the content for the label
 *     tag. This value is not escaped.
 * @param array $textarea_attrs the attributes for
 *     the textarea tag. These attributes render like
 *     in c\attrs(). If the 'id' key is set then the
 *     following attributes will be set automatically:
 *     the textarea 'name' will be $id; the label
 *     'id' will be "l_$id" and the label 'for' will
 *     be $id.
 * @param string $content the content for the textarea
 *     tag. This value is escaped.
 * @param array $label_attrs the attributes for the
 *     label tag. These attributes render like in
 *     c\attrs().
 * @return string a label tag and a textarea tag
 */
function ltextarea(
    $label,
    array $textarea_attrs = array(),
    $content = '',
    array $label_attrs = array())
{
    if($id = $textarea_attrs['id']) {
        $textarea_attrs['name'] = $id;
        $label_attrs['id'] = "l_$id";
        $label_attrs['for'] = $id;
    }

    return label($label_attrs, $label)
        . textarea($textarea_attrs, esc($content));
}

/**
 * Get a string that is a div containing a label
 * tag and a textarea tag.
 *
 * @param string $label the content for the label
 *     tag. This value is not escaped.
 * @param array $textarea_attrs the attributes for
 *     the textarea tag. These attributes render like
 *     in c\attrs(). If the 'id' key is set then the
 *     following attributes will be set automatically:
 *     the textarea 'name' will be $id; the label
 *     'id' will be "l_$id"; the label 'for' will
 *     be $id and the div 'id' will be "c_$id".
 * @param string $content the content for the textarea
 *     tag. This value is escaped.
 * @param array $label_attrs the attributes for the
 *     label tag. These attributes render like in
 *     c\attrs().
 * @param array $div_attrs the attributes for the
 *     div tag. These attributes render like in
 *     c\attrs().
 * @return string div containing a label tag and a
 *     textarea tag
 */
function dltextarea(
    $label,
    array $textarea_attrs = array(),
    $content = '',
    array $label_attrs = array(),
    array $div_attrs = array())
{
    if($id = $textarea_attrs['id']) {
        $div_attrs['id'] = "c_$id";
    }

    return div(
        $div_attrs,
        ltextarea(
            $label,
            $textarea_attrs,
            $content,
            $label_attrs));
}

/**
 * Get a string that is a select tag containing
 * option tags. You cannot set option tag attributes
 * using this function. However, the option tag value
 * attribute and selected value will be set for you.
 * This function will handle single select and
 * multi-select.
 *
 * @param array $options each element in this array
 *     is an option tag. The array key is the option
 *     value and the array value is the option tag
 *     content(this content value is escaped).
 * @param array $select_attrs the attributes for the
 *     select tag. These attributes render like in
 *     c\attrs(). If this array contains the value
 *     'multiple', then '[]' is appended to the select
 *     tag name attribute.
 * @param mixed $selected_values the values that are
 *     selected by default. These match against the
 *     array keys of the $options argument. If the
 *     $select_attrs argument contains the value
 *     'multiple' then this should be an array,
 *     otherwise this should be a scalar value.
 * @return string a select tag containing option
 *     tags
 */
function drop_down(
    array $options,
    array $select_attrs = array(),
    $selected_values = array())
{
    $is_multiple = in_array('multiple', $select_attrs);

    if($is_multiple) {
        $select_attrs['name'] = $select_attrs['name'] . '[]';
    }

    $option_tags = array();

    foreach($options as $value => $content) {
        $is_selected =
            ($is_multiple && in_array($value, $selected_values))
            || $value == $selected_values;

        $option_tags[] = option(
            array(
                'value' => $value,
                $is_selected ? 'selected' : ''),
            esc($content));
    }

    return select(
        $select_attrs,
        implode($option_tags));
}

function ldrop_down(
    $label,
    array $options,
    array $select_attrs = array(),
    $selected_values = array(),
    array $label_attrs = array())
{
    if($id = $select_attrs['id']) {
        $select_attrs['name'] = $id;
        $label_attrs['id'] = "l_$id";
        $label_attrs['for'] = $id;
    }

    return label($label_attrs, $label)
        . drop_down($options, $select_attrs, $selected_values);
}

function dldrop_down(
    $label,
    array $options,
    array $select_attrs = array(),
    $selected_values = array(),
    array $label_attrs = array(),
    array $div_attrs = array())
{
    if($id = $select_attrs['id']) {
        $div_attrs['id'] = "c_$id";
    }

    return div(
        $div_attrs,
        ldrop_down(
            $label,
            $options,
            $select_attrs,
            $selected_values,
            $label_attrs));
}

function checkboxes(
    $name,
    array $checkboxes,
    array $checked_values = array())
{
    $i = 0;
    ob_start();

    foreach($checkboxes as $value => $label) {
        print dlinput(
            $label,
            array(
                'id' => $name . $i++,
                'name' => $name . '[]',
                'type' => 'checkbox',
                'value' => $value,
                in_array($value, $checked_values) ? 'checked' : ''));
    }

    return ob_get_clean();
}

function scheckboxes(
    $title,
    $name,
    array $checkboxes,
    array $checked_values = array())
{
    return
        span(
            array('id' => "t_$name"),
            $title)

        . checkboxes(
            $name,
            $checkboxes,
            $checked_values);
}

function dscheckboxes(
    $title,
    $name,
    array $checkboxes,
    array $checked_values = array(),
    array $div_attrs = array())
{
    $div_attrs['id'] = "c_$name";
    return div(
        $div_attrs,
        scheckboxes(
            $title,
            $name,
            $checkboxes,
            $checked_values));
}

function radio_buttons(
    $name,
    array $radio_buttons,
    $checked_value = null)
{
    $i = 0;
    ob_start();

    foreach($radio_buttons as $value => $label) {
        print dlinput(
            $label,
            array(
                'id' => $name . $i++,
                'name' => $name,
                'type' => 'radio',
                'value' => $value,
                !is_null($checked_value) && $value == $checked_value
                    ? 'checked'
                    : ''));
    }

    return ob_get_clean();
}

function sradio_buttons(
    $title,
    $name,
    array $radio_buttons,
    $checked_value = null)
{
    return
        span(
            array('id' => "t_$name"),
            $title)

        . radio_buttons(
            $name,
            $radio_buttons,
            $checked_value);
}
