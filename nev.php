<?php
/**
 * This is a file-level comment.
 */

namespace MyNamespace;

class Validateur {
    /**
     * Check the input string.
     *
     * @param string $input The input string.
     *
     * @return bool True if the input is valid, false otherwise.
     */
    public function check($input)
    {
        if (strlen($input) < 2) {
            return false;
        } else {
            return true;
        }
    } //end check()
} //end class

// This is a comment on a single line.
