<?php

require '../src/corn-wand.php';

echo
c\pform(
    c\dlinput(
        'username',
        array('id' => 'username')),
    '<input type="submit" value="submit">');
