<?php

$a = filter_input(INPUT_GET, 'a', FILTER_SANITIZE_STRING);

if(!$c) {
    $c = 'posts';
} 

switch($a) 
{
    case 'afficherPost':
        break;
}