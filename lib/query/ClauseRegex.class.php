<?php
/**
 * (c) 2010 phpgrease.net
 *
 * For licensing terms, plese see license.txt which should distribute with this source
 *
 * @package Pandra
 * @link http://www.phpgrease.net/projects/pandra
 * @author Michael Pearson <pandra-support@phpgrease.net>
 */

class PandraClauseRegex extends PandraClause {
    /**
     * @var string
     */
    private $_pattern = NULL;

    /**
     * @var int
     */
    private $_flags = NULL;

    /**
     * @var int
     */
    private $_offset = NULL;

    public $matches = array();

    /**
     * @param string $pattern
     * @param int $flags
     * @param int $offset
     */
    public function __construct($pattern, $flags = null, $offset = null) {
        $this->_pattern = $pattern;
        $this->_flags = $flags;
        $this->_offset = $offset;
    }

    /**
     * @param string $value
     * @return bool
     */
    public function match($value) {
        return (bool) preg_match($this->_pattern, $value, $this->matches, $this->_flags, $this->_offset);
    }
}