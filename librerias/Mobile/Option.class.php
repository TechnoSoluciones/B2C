<?php
/*
 *  Php - HTML code generator for jQuery Mobile Framework
 *  Copyright (C) 2011  Jose Alexis Correa Valencia
 *
 *  This program is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */
/**
 * This file is part of the Php package.
 * @package Php
 * @filesource
 */
/**
 * This class represents the 'option' tag.
 * @class Option
 * @author Jose Alexis Correa Valencia <jalexiscv@gmail.com>
 * @copyright Copyright (c) 2016, Jose Alexis Correa Valencia
 * @license http://www.gnu.org/licenses/gpl.html GNU Public License
 * @package Php
 * @version 0.03
 * @since 0.01
 * @link http://www.php.com/ Php Website
 * @link http://code.google.com/p/php/ Php Project Website
 * @link http://www.jquerymobile.com jQuery Mobile Website
 */
class Option extends Tag {
    private $_text;
    private $_value;
    private $_selected;
    function  __construct($text, $value='', $selected=false) {
        parent::__construct('option');
        $this->_text = $this->add(new Text($text), true);
        $this->_value = $this->attribute('value', $value, true);
        $this->_selected = $this->attribute('selected', (($selected) ? 'selected' : ''), true);
    }
    /**
     * Gets and sets the text property.
     * @param string $value
     * @return string|Option
     */
    function text(){
        $args = func_get_args();
        if (count($args) == 0) return $this->_text->text();
        $this->_text->text($args[0]);
        return $this;
    }
    /**
     * Gets and sets the value attribute.
     * @param string $value
     * @return string|Option
     */
    function value(){
        $args = func_get_args();
        if (count($args) == 0) return $this->_value->value();
        $this->_value->value($args[0]);
        return $this;
    }
    /**
     * Gets and sets the selected attribute.
     * @param bool $value
     * @return bool|Option
     */
    function selected(){
        $args = func_get_args();
        if (count($args) == 0) return ($this->_selected->value() == 'selected') ? true : false;
        $this->_selected->value(($args[0]) ? 'selected' : '');
        return $this;
    }
}
?>
