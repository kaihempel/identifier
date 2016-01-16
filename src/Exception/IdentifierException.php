<?php namespace Identifier\Exception;

use Exception;

/**
 * Identifier exception
 *
 * @package    Identifier
 * @author     Kai Hempel <dev@kuweh.de>
 * @copyright  2014 Kai Hempel <dev@kuweh.de>
 * @license    http://www.opensource.org/licenses/BSD-3-Clause  The BSD 3-Clause License
 * @link       https://www.kuweh.de/
 * @since      Class available since Release 1.0.0
 */
class IdentifierException extends Exception
{
    /**
     * Returns the exception object.
     *
     * @param   string $message
     * @return  \Dbrouter\Exception\DbrouterException
     */
    public static function make($message = NULL) {

        if (empty($message) || ! is_string($message)) {
            $message = 'Unknown exception';
        }

        return new static($message);
    }
}