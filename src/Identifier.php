<?php namespace Identifier;

use Identifier\Exception\IdentifierException;

/**
 * Identifier class
 *
 * @package    Identifier
 * @author     Kai Hempel <dev@kuweh.de>
 * @copyright  2016 Kai Hempel <dev@kuweh.de>
 * @license    http://www.opensource.org/licenses/BSD-3-Clause  The BSD 3-Clause License
 * @link       https://www.kuweh.de/
 * @since      Class available since Release 1.0.0
 */
class Identifier
{
    /**
     * ID value
     *
     * @var integer
     */
    private $id = NULL;

    /**
     * Constructor
     *
     * @param   integer $id
     * @throws  IdentifierException
     */
    public function __construct($id)
    {
        if ( ! is_numeric($id)) {
            throw IdentifierException::make('Unexpected ID value given!');
        }

        $this->id = (int)$id;
    }

    /**
     * Returns the identifier
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Checks if the current ID is zero
     *
     * @return boolean
     */
    public function isEmpty()
    {
        return (empty($this->id)) ? true : false;
    }

    /**
     * Checks in current instance is representing the given value
     *
     * @param   integer $id
     * @return  boolean
     * @throws  IdentifierException
     */
    public function is($id)
    {
        if ( ! is_int($id)) {
            throw IdentifierException::make('Only integer values allowed!');
        }

        return ($this->id == $id);
    }

    /**
     * Short implementation for string comparisons
     *
     * @return string
     */
    public function __toString()
    {
        return (string)$this->id;
    }

}
