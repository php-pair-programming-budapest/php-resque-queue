<?php
/**
 * @author David Namenyi <dnamenyi@gmail.com>
 * Date: 2016.06.15.
 */

require 'vendor/autoload.php';

Resque::setBackend('localhost:6379');

$args = [
    'text' => 'Yooo, it works'
];
Resque::enqueue('yo_queue', 'Jobs\Yo', $args);

echo '<hr> end';