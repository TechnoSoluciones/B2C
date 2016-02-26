<?php
/*
 *  iMobile - HTML code generator for jQuery Mobile Framework
 *  Copyright (C) 2016 Jose Alexis Correa Valencia
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
 * This class represents the 'option' tag.
 *
 * @author Jose Alexis Correa Valencia<jalexiscv@gmail.com>
 * @copyright Copyright (c) 2016, Jose Alexis Correa Valencia
 * @license http://www.gnu.org/licenses/gpl.html GNU Public License
 * @package iMobile
 * @version 0.9
 * @since 0.01
 * @link http://www.insside.com/plataforma/
 * @link http://www.insside.com
 * @link http://www.jquerymobile.com jQuery Mobile Website
 */
class Option extends Tag
{
    private $_text;
    private $_value;
    private $_selected;

    public function  __construct($text, $value = '', $selected = false)
    {
        parent::__construct('option');
        $this->_text = $this->add(new Text($text), true);
        $this->_value = $this->attribute('value', $value, true);
        $this->_selected = $this->attribute('selected', (($selected) ? 'selected' : ''), true);
    }

    /**
     * Gets and sets the text property.
     * @param string $value
     * @return string|option
     */
    public function text()
    {
        if (func_num_args() === 0) {
            return $this->_text->text();
        }
        $this->_text->text(func_get_arg(0));
        return $this;
    }

    /**
     * Gets and sets the value attribute.
     * @param string $value
     * @return string|option
     */
    public function value()
    {
        if (func_num_args() === 0) {
            return $this->_value->value();
        }
        $this->_value->value(func_get_arg(0));
        return $this;
    }

    /**
     * Gets and sets the selected attribute.
     * @param boolean $value
     * @return bool|option
     */
    public function selected()
    {
        if (func_num_args() === 0) {
            return ($this->_selected->value() == 'selected') ? true : false;
        }
        $this->_selected->value(func_get_arg(0) === true ? 'selected' : '');
        return $this;
    }
}