<?php

/**
 * Wasp Package Manager!
 * 
 * @version beta-0.1.0
 */

function wasp_include(string ...$packages) : null {
    $path = defined('WASP_PKG_ROOT') ? constant("WASP_PKG_ROOT") : realpath(dirname(__FILE__) . '/../');

    if (!$path) {
        return null;
    }

    var_dump($path);

    return null;
}