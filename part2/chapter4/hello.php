<?php 
function hello ($name, $greeting = 'Hello!')
{
    echo $greeting, $name, PHP_EOL;
}

hello('Bob','Good morning!');
hello('Tom');
?>
