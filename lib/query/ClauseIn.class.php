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

class PandraClauseIn extends PandraClause {

    /**
     * @var array
     */
    private $_valueIn = array();

    /**
     * @param $valueIn
     */
    public function __construct($valueIn) {
        $this->setValueIn((array) $valueIn);
    }

    /**
     * @return array
     */
    public function getValueIn() {
        return $this->_valueIn;
    }

    /**
     * @param array $values
     */
    public function setValueIn(array $values) {
        $this->_valueIn = $values;
    }

    /**
     * @param int $value
     * @return bool
     */
    public function match($value) {
        return (in_array($value, $this->_valueIn));
    }
}