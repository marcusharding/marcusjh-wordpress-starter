<?php
/**
 * Theme's functions and definitions
 *
 * @package theme
 * @since theme 1.0
 */

$theme_includes = [
    'lib/',
  ];

// If file is a directory, recursively iterate over all contents of it and
// require_once all contents with the .php. If its a file, just require_once it.

foreach ($theme_includes as $file) {
    if (!$filepath = locate_template($file)) {
        trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
    }

    if (is_dir($filepath)) {
        $iterator = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($filepath)
        );

        $files = new RegexIterator($iterator, '/^.+\.php$/', RecursiveRegexIterator::GET_MATCH);

        foreach ($files as $file) {
            require_once $file[0];
        }
    } else {
        require_once $filepath;
    }
}

unset($file, $filepath, $iterator);