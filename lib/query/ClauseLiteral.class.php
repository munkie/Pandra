<?php
/**
 * (c) 2010 phpgrease.net
 *
 * For licensing terms, plese see license.txt which should distribute with this source
 *
 * Explicit usage:
 *          $clause = new PandraClauseLiteral('abcdefg');
 *          $clause->match();
 *
 * Query Callback
 *          $q = new PandraQuery();
 *          $q->Literal('abcdefg'));
 *
 * @package Pandra
 * @link http://www.phpgrease.net/projects/pandra
 * @author Michael Pearson <pandra-support@phpgrease.net>
 */

class PandraClauseLiteral extends PandraClause {

    /**
     * @var string
     */
    private $_arg = NULL;

    /**
     * @var bool
     */
    private $_strict = FALSE;

    /**
     * @param mixed $arg value to match against
     * @param bool $strict match identical type and value (default false)
     */
    public function __construct($arg, $strict = false) {
        $this->_arg = $arg;
        $this->_strict = (bool) $strict;
    }

    /**
     * @param $value
     * @return bool
     */
    public function match($value) {
        return $this->_strict ? 
                    $value === $this->_arg :
                    $value == $this->_arg;
    }
}