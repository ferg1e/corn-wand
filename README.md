# Corn Wand

Corn Wand is a PHP functional library for generating HTML.

## Documentation

All functions have a DocBlock. So you can read the source code or
generate documentation with [phpDocumentor](http://phpdoc.org/).

## Requirements

**PHP 5.3** or higher

## Source Code

The [project](https://github.com/al-codepone/corn-wand) is on GitHub.
The actual source code is in a [single file](https://github.com/al-codepone/corn-wand/blob/master/src/corn-wand.php).

## Tests

All tests are in the [test directory](https://github.com/al-codepone/corn-wand/tree/master/test).
Each test is a standalone PHP script.
There is a test for each function; the name of the test script is the function name.
Some tag functions don't have tests.

## Installation

Install using composer:

```javascript
{
    "require": {
        "corn-wand/corn-wand": "0.5.1",
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

### focus()

Call JavaScript `focus()` on a CSS id:

```php
echo c\focus('username');

//<script>document.getElementById('username').focus();</script>
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

### ltextarea() and dltextarea()

`ltextarea()` is for a label and a textarea:

```php
echo c\ltextarea(
    'Your Message',
    array('name' => 'message'));

/*
<label>Your Message</label>
<textarea name="message"></textarea>
*/
```

Setting `id` will set other attributes:

```php
echo c\ltextarea(
    'Your Message',
    array('id' => 'message'),
    'Hello there');

/*
<label id="l_message" for="message">Your Message</label>
<textarea id="message" name="message">Hello there</textarea>
*/
```

`dltextarea()` is the same but with a container div:

```php
echo c\dltextarea(
    'Your Message',
    array('id' => 'message'));

/*
<div id="c_message">
    <label id="l_message" for="message">Your Message</label>
    <textarea id="message" name="message"></textarea>
</div>
*/
```

### drop_down(), ldrop_down() and dldrop_down()

`drop_down()` is for a select tag:

```php
echo c\drop_down(
    array(
        'small',
        'medium',
        'large'),
    array('id' => 'size'));

/*
<select id="size" name="size">
    <option value="0">small</option>
    <option value="1">medium</option>
    <option value="2">large</option>
</select>
*/
```

`ldrop_down()` adds a label:

```php
echo c\ldrop_down(
    'Season',
    array(
        'f' => 'Fall',
        'w' => 'Winter',
        's' => 'Spring'),
    array('id' => 'season'));

/*
<label id="l_season" for="season">Season</label>
<select id="season" name="season">
    <option value="f">Fall</option>
    <option value="w">Winter</option>
    <option value="s">Spring</option>
</select>
*/
```

`dldrop_down()` adds a div and a label:

```php
echo c\dldrop_down(
    'Sports',
    array(
        1 => 'soccer',
        'basketball',
        'baseball',
        'rugby'),
    array(
        'id' => 'sports',
        'multiple'),
    array(1, 2));

/*
<div id="c_sports">
    <label id="l_sports" for="sports">Sports</label>
    <select id="sports" multiple name="sports[]">
        <option value="1" selected>soccer</option>
        <option value="2" selected>basketball</option>
        <option value="3">baseball</option>
        <option value="4">rugby</option>
    </select>
</div>
*/
```

### checkboxes(), scheckboxes() and dscheckboxes()

`checkboxes()` is for a group of checkboxes. Each checkbox renders using `dlinput()`:

```php
echo c\checkboxes(
    'color',
    array(
        'beige',
        'cyan',
        'puce'));

/*
<div id="c_color0">
    <label id="l_color0" for="color0">beige</label>
    <input id="color0" name="color[]" type="checkbox" value="0"/>
</div>
<div id="c_color1">
    <label id="l_color1" for="color1">cyan</label>
    <input id="color1" name="color[]" type="checkbox" value="1"/>
</div>
<div id="c_color2">
    <label id="l_color2" for="color2">puce</label>
    <input id="color2" name="color[]" type="checkbox" value="2"/>
</div>
*/
```

`scheckboxes()` adds a title span:

```php
echo c\scheckboxes(
    'Pets',
    'pet',
    array(
        'dog' => 'Dog',
        'cat' => 'Cat',
        'fish' => 'Fish'));

/*
<span id="t_pet">Pets</span>
<div id="c_pet0">
    <label id="l_pet0" for="pet0">Dog</label>
    <input id="pet0" name="pet[]" type="checkbox" value="dog"/>
</div>
<div id="c_pet1">
    <label id="l_pet1" for="pet1">Cat</label>
    <input id="pet1" name="pet[]" type="checkbox" value="cat"/>
</div>
<div id="c_pet2">
    <label id="l_pet2" for="pet2">Fish</label>
    <input id="pet2" name="pet[]" type="checkbox" value="fish"/>
</div>
*/
```

`dscheckboxes()` adds a container div and a title span:

```php
echo c\dscheckboxes(
    'Drinks',
    'drink',
    array(
        'water',
        'OJ',
        'milk'));

/*
<div id="c_drink">
    <span id="t_drink">Drinks</span>
    <div id="c_drink0">
        <label id="l_drink0" for="drink0">water</label>
        <input id="drink0" name="drink[]" type="checkbox" value="0"/>
    </div>
    <div id="c_drink1">
        <label id="l_drink1" for="drink1">OJ</label>
        <input id="drink1" name="drink[]" type="checkbox" value="1"/>
    </div>
    <div id="c_drink2">
        <label id="l_drink2" for="drink2">milk</label>
        <input id="drink2" name="drink[]" type="checkbox" value="2"/>
    </div>
</div>
*/
```

### radio_buttons(), sradio_buttons() and dsradio_buttons()

`radio_buttons()` is for a group of radio buttons. Each radio button renders using `dlinput()`:

```php
echo c\radio_buttons(
    'bed',
    array(
        'single',
        'queen',
        'king'));

/*
<div id="c_bed0">
    <label id="l_bed0" for="bed0">single</label>
    <input id="bed0" name="bed" type="radio" value="0"/>
</div>
<div id="c_bed1">
    <label id="l_bed1" for="bed1">queen</label>
    <input id="bed1" name="bed" type="radio" value="1"/>
</div>
<div id="c_bed2">
    <label id="l_bed2" for="bed2">king</label>
    <input id="bed2" name="bed" type="radio" value="2"/>
</div>
*/
```

`sradio_buttons()` adds a title span:

```php
echo c\sradio_buttons(
    'City',
    'city',
    array(
        'nyc' => 'New York',
        'queens' => 'Queens',
        'flagstaff' => 'Flagstaff'));

/*
<span id="t_city">City</span>
<div id="c_city0">
    <label id="l_city0" for="city0">New York</label>
    <input id="city0" name="city" type="radio" value="nyc"/>
</div>
<div id="c_city1">
    <label id="l_city1" for="city1">Queens</label>
    <input id="city1" name="city" type="radio" value="queens"/>
</div>
<div id="c_city2">
    <label id="l_city2" for="city2">Flagstaff</label>
    <input id="city2" name="city" type="radio" value="flagstaff"/>
</div>
*/
```

`dsradio_buttons()` adds a container div and a title span:

```php
echo c\dsradio_buttons(
    'Planet',
    'planet',
    array(
        'Venus',
        'Mars',
        'Saturn'),
    0);

/*
<div id="c_planet">
    <span id="t_planet">Planet</span>
    <div id="c_planet0">
        <label id="l_planet0" for="planet0">Venus</label>
        <input id="planet0" name="planet" type="radio" value="0" checked/>
    </div>
    <div id="c_planet1">
        <label id="l_planet1" for="planet1">Mars</label>
        <input id="planet1" name="planet" type="radio" value="1"/>
    </div>
    <div id="c_planet2">
        <label id="l_planet2" for="planet2">Saturn</label>
        <input id="planet2" name="planet" type="radio" value="2"/>
    </div>
</div>
*/
```

## LICENSE

MIT <http://ryf.mit-license.org/>
