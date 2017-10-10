<?php

// allias for \codingbootcamp\tinymvc\request::get
function request($name, $default = null) {
    return \codingbootcamp\tinymvc\request::get($name, $default);
}

function config($key, $default = null) {
    return \polakjan\tinymvc\config::get($key, $default);
}