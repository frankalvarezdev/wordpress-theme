<?php

require_once __DIR__ . '/fromNow.php';

function getImage($url, $type = 'rectangle') {
    require __DIR__ . '/../components/images/rectangle.php';
}

function icon($icon) {
    return "<i data-icon='{$icon}'></i>";
}