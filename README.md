# Corn Wand

Corn Wand is a PHP functional library for generating HTML. The first
version is still in development. This README is unfinished.

## Documentation

All functions have a DocBlock. So you can read the source code or
generate documentation with [phpDocumentor](http://phpdoc.org/).

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
echo c\br(); //<br/>
echo c\html(); //<html/>
echo c\p(); //<p/>
```

```php
echo c\div('hello'); //<div>hello</div>
```

```php
echo c\div(array('id' => 'hi')); //<div id="hi"/>
```

```php
echo c\div(
    array('id' => 'hi'),
    'hello');

//<div id="hi">hello</div>
```

```php
echo c\p('red ', 'yellow ', 'blue');

//<p>red yellow blue</p>
```

```php
echo c\p(
    array('id' => 'colors'),
    'red ',
    'yellow ',
    'blue');

//<p id="colors">red yellow blue</p>
```

```php
echo c\input(array(
    'id' => 'agree',
    'type' => 'checkbox',
    'checked'));

//<input id="agree" type="checkbox" checked/>
```

```php
echo c\div(c\span('ok Dad'));

/*
<div>
    <span>ok Dad</span>
</div>
*/
```

```php
echo 
c\ul(
    c\li('item 1'),
    c\li('item 2'),
    c\li('item 3'));

/*
<ul>
    <li>item 1</li>
    <li>item 2</li>
    <li>item 3</li>
</ul>
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

## More Functions

There are many more functions. These functions return more intricate HTML.

### html5()

`html5()` works like `html()` but has the HTML5 doctype in front:

```php
echo c\html5(c\body('hi'));

/*
<!doctype html>
<html>
    <body>hi</body>
</html>
*/
```

### hlink()

Get a hyperlink:

```php
echo c\hlink('http://github.com');

//<a href="http://github.com">http://github.com</a>
```

```php
echo c\hlink('http://github.com', 'GitHub');

//<a href="http://github.com">GitHub</a>
```

### css() and js()

`css()` and `js()` work similarly:

```php
echo c\css('one.css', 'two.css', 'three.css');

/*
<link rel="stylesheet" href="one.css"/>
<link rel="stylesheet" href="two.css"/>
<link rel="stylesheet" href="three.css"/>
*/
```

```php
echo c\js('menu.js', 'game.js', 'slide-show.js');

/*
<script src="menu.js"></script>
<script src="game.js"></script>
<script src="slide-show.js"></script>
*/
```

You can use an array for these if you like:

```php
$css = array('all.css', 'header.css', 'nav.css');
echo c\css($css);

/*
<link rel="stylesheet" href="all.css"/>
<link rel="stylesheet" href="header.css"/>
<link rel="stylesheet" href="nav.css"/>
*/
```

### ulist() and olist()

Get `<ul>` or `<ol>` with items:

```php
echo c\ulist('seven', 'six', 'five');

/*
<ul>
    <li>seven</li>
    <li>six</li>
    <li>five</li>
</ul>
*/
```

```php
echo c\olist(
    'salsa',
    'bbq',
    'cheese',
    array('type' => 'i'));

/*
<ol type="i">
    <li>salsa</li>
    <li>bbq</li>
    <li>cheese</li>
</ol>
*/
```

You can use an array for the items:

```php
$items = array('salsa', 'bbq', 'cheese');
echo c\olist(
    $items,
    array('type' => 'i'));

/*
<ol type="i">
    <li>salsa</li>
    <li>bbq</li>
    <li>cheese</li>
</ol>
*/
```

Use a nested array to set item attributes:

```php
echo c\olist(array(
    'salsa',
    'bbq' => array('id' => 'mid'),
    'cheese'));

/*
<ol>
    <li>salsa</li>
    <li id="mid">bbq</li>
    <li>cheese</li>
</ol>
*/
```

### linput() and dlinput()

`linput()` is for a label and an input:

```php
echo c\linput(
    'First Name',
    array('value' => 'Fred'));

/*
<label>First Name</label>
<input value="Fred"/>
*/
```

Setting `id` will set other attributes:

```php
echo c\linput(
    'First Name',
    array(
        'value' => 'Fred',
        'id' => 'first'));

/*
<label id="l_first" for="first">First Name</label>
<input value="Fred" id="first" name="first"/>
*/
```

`dlinput()` is the same but with a container div:

```php
echo c\dlinput(
    'Email',
    array('id' => 'email'));

/*
<div id="c_email">
    <label id="l_email" for="email">Email</label>
    <input id="email" name="email"/>
</div>
*/
```

## LICENSE

MIT <http://ryf.mit-license.org/>
