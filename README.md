# Corn Wand

Corn Wand is a PHP functional library for generating HTML. I'm still working
on the first release but here's a preview:

```php
<?php

require 'corn-wand.php';

echo
    c\html5(
        array('lang' => 'en'),
        c\head(
            c\meta(array('charset' => 'utf-8')),
            c\title('A Couple States')),
        c\body(
            c\ol(
                c\li('Utah'),
                c\li('California'),
                c\li('New York'),
                c\li('Florida'))));
```

## LICENSE

MIT <http://ryf.mit-license.org/>
