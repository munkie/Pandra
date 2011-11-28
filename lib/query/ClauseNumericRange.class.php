<?php
/**
 * (c) 2010 phpgrease.net
 *
 * For licensing terms, plese see license.txt which should distribute with this source
 *
 * Explicit usage:
 *          $clause = new PandraClauseNumericRange(array('from' => 0, 'to' => 200));
 *          $clause->match();
 *
 * Query Callback
 *          $q = new PandraQuery();
 *          $q->NumericRange(array('from' => 0, 'to' => 200));
 *
 * @package Pandra
 * @link http://www.phpgrease.net/projects/pandra
 * @author Michael Pearson <pandra-support@phpgrease.net>
 */

class PandraClauseNumericRange extends PandraClause {

    /**
     * @var int
     */
    private $_from;

    /**
     * @var int
     */
    private $_to;

    /**
     * @param int $from
     * @param int $to
     */
    public function __construct($from = null, $to = null) {
        $this->_from = $from;
        $this->_to = $to;
    }

    /**
     * @param int $value
     * @return bool
     */
    public function match($value) {
        $fromMatch = (null !== $this->_from) ? is_numeric($value) && $this->_from <= $value : is_numeric($value);
        $toMatch = (null !== $this->_to) ? is_numeric($value) && $this->_to >= $value : is_numeric($value);
        return $fromMatch && $toMatch;
    }
}