# Corn Wand

Corn Wand is a PHP functional library for generating HTML. I'm still
working on the first release. This README is in an unfinished state.

## Documentation

All functions have a DocBlock. So you can read the source or generate
documentation with [phpDocumentor](http://phpdoc.org/).

## Requirements

**PHP 5.3** or higher

## Code

<https://github.com/al-codepone/corn-wand>

## Installation

Install using composer:

```javascript
{
    "require": {
        "corn-wand/corn-wand": "dev-master",
    }
}
```

or you can install manually:

```php
require 'corn-wand.php';
```

## Tag Functions

There's a function for each HTML tag. Here's the list of supported tags:

`a`, `abbr`, `address`, `area`, `article`, `aside`, `audio`, `b`, `base`,
`bdi`, `bdo`, `blockquote`, `body`, `br`, `button`, `canvas`, `caption`,
`cite`, `code`, `col`, `colgroup`, `content`, `data`, `datalist`, `dd`,
`decorator`, `del`, `details`, `dfn`, `div`, `dl`, `dt`, `element`, `em`,
`embed`, `fieldset`, `figcaption`, `figure`, `footer`, `form`, `h1`, `h2`,
`h3`, `h4`, `h5`, `h6`, `head`, `header`, `hr`, `html`, `i`, `iframe`,
`img`, `input`, `ins`, `kbd`, `keygen`, `label`, `legend`, `li`, `link`,
`main`, `map`, `mark`, `math`, `menu`, `menuitem`, `meta`, `meter`, `nav`,
`noscript`, `object`, `ol`, `optgroup`, `option`, `output`, `p`, `param`,
`pre`, `progress`, `q`, `rp`, `rt`, `ruby`, `s`, `samp`, `script`,
`section`, `select`, `shadow`, `small`, `source`, `span`, `strong`,
`style`, `sub`, `summary`, `sup`, `svg`, `table`, `tbody`, `td`, `template`,
`textarea`, `tfoot`, `th`, `thead`, `time`, `title`, `tr`, `track`, `u`,
`ul`, `var`, `video`, `wbr`.

All tag function names are the name of the tag except for `var`. Use `_var()` instead.
All the tag functions work the same way: if the first agrument is an array then it is
the tag attributes. All other arguments are concatenated together to form the tag
content. Examples:

```php
echo c\html(); //<html/>
```

```php
echo c\br(); //<br/>
```

```php
echo c\input(array('id' => 'username')); //<input id="username"/>
```

```php
echo c\input(
    array(
        'type' => 'checkbox',
        'checked'));

//<input type="checkbox" checked/>
```

```php
echo c\div('hello'); //<div>hello</div>
```

```php
echo c\span(
    array('id' => 'tool'),
    'hammer');

//<span id="tool">hammer</span>
```

```php
echo c\p(
    'red ',
    'yellow ',
    'blue');

//<p>red yellow blue</p>
```

```php
echo
    c\div(
        c\p('p1'),
        c\p('p2'));

/*
<div>
    <p>p1</p>
    <p>p2</p>
</div>
*/
```

```php
echo
    c\html(
        array('lang' => 'en'),
        c\head(
            c\title('My Page')),
        c\body(
            c\h1('My Page')));

/*
<html lang="en">
    <head>
        <title>My Page</title>
    </head>
    <body>
        <h1>My Page</h1>
    </body>
</html>
*/
```


## LICENSE

MIT <http://ryf.mit-license.org/>
