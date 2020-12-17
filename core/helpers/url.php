<?php 

function asset($filename = '') {
    return BASE_URL . '//assets/' . $filename;
}

function image($filename = '') {
    return BASE_URL . '/assets/img/' . $filename;
}

function base_url($path = '') {
    return BASE_URL . '/' . $path;
}