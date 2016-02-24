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
 * This class represents the 'select' tag (data-role="slider").
 * @class Slider
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
class Slider extends Tag {
    private $_role;
    private $_name;
    private $_label;
    private $_fieldContain;
    private $_isOn;
    private $_on;
    private $_off;
    /**
     *
     * @param string $id
     * @param string $name
     * @param string $label
     * @param bool $isOn
     * @param string $onLabel
     * @param string $onValue
     * @param string $offLabel
     * @param string $offValue
     * @param string $theme
     * @param bool $fieldContain
     */
    function __construct($id='', $name='', $label='', $isOn=false, $onLabel='on', $onValue='on', $offLabel='off', $offValue='off', $theme='', $fieldContain=false){
        parent::__construct('select', $id, '', '', $theme);
        $this->_role = $this->attribute('data-role', 'slider', true);
        $this->_name = $this->addAttribute(new Attribute('name', $name, true), true);
        $this->_isOn = ($isOn);
        $this->_label = new Label('', $label, $name);
        $this->_fieldContain = $fieldContain;
        $this->_off = $this->add(new Tag('option', '', array(new Attribute('value', $offValue), new Attribute('selected', '')), $offLabel), true);
        $this->_on = $this->add(new Tag('option', '', array(new Attribute('value', $onValue), new Attribute('selected', '')), $onLabel), true);
        $this->isOn($this->_isOn);
    }
    /**
     * Gets and sets the name attribute.
     * @param string $value
     * @return string|Slider
     */
    function name() {
        $args = func_get_args();
        if (count($args) == 0) return $this->_name->value();
        $this->_name->value($args[0]);
        $this->_label->forField($this->_name->value());
        return $this;
    }
    /**
     * Gets and sets the onValue property.
     * @param string $value
     * @return string|Slider
     */
    function onValue() {
        $args = func_get_args();
        if (count($args) == 0) return $this->_on->attribute('value');
        $this->_on->attribute('value', $args[0]);
        return $this;
    }
    /**
     * Gets and sets the onLabel property.
     * @param string $value
     * @return string|Slider
     */
    function onLabel() {
        $args = func_get_args();
        if (count($args) == 0) return $this->_on->items()->get(0);
        $this->_on->items()->set(0, $args[0]);
        return $this;
    }
    /**
     * Gets and sets the offValue property.
     * @param string $value
     * @return string|Slider
     */
    function offValue() {
        $args = func_get_args();
        if (count($args) == 0) return $this->_off->attribute('value');
        $this->_off->attribute('value', $args[0]);
        return $this;
    }
    /**
     * Gets and sets the offLabel property.
     * @param string $value
     * @return string|Slider
     */
    function offLabel() {
        $args = func_get_args();
        if (count($args) == 0) return $this->_off->items()->get(0);
        $this->_off->items()->set(0, $args[0]);
        return $this;
    }
    /**
     * Gets and sets the isOn property.
     * @param bool $value
     * @return bool|Slider
     */
    function isOn() {
         $args = func_get_args();
        if (count($args) == 0) return $this->_isOn;
        $this->_isOn = ($args[0]);
        if ($this->_isOn) { 
            $this->_on->attribute('selected', 'selected');
            $this->_off->attribute('selected', '');
        } else {
            $this->_on->attribute('selected', '');
            $this->_off->attribute('selected', 'selected');
        }
        return $this;
    }
    /**
     * Sets slider on.
     * @return Slider
     */
    function on() {
        return $this->isOn(true);
    }
    /**
     * Sets slider off.
     * @return Slider
     */
    function off() {
        return $this->isOn(false);
    }
    /**
     * Gets and sets the label property.
     * @param string $value
     * @return string|Slider
     */
    function label() {
        $args = func_get_args();
        if (count($args) == 0) return $this->_label->text();
        $this->_label->text($args[0]);
        return $this;
    }
    /**
     * Gets and sets the fieldContain property.
     * If the fieldContain is true an automatic div data-role="fieldcontain" is generated.
     * @param bool $value
     * @return bool|Slider
     */
    function fieldContain(){
        $args = func_get_args();
        if (count($args) == 0) return $this->_fieldContain;
        $this->_fieldContain = $args[0];
        return $this;
    }
    /**
     * @access private
     * @param string $value
     * @return string|Slider
     */
    function role() {
        $args = func_get_args();
        if (count($args) == 0) return $this->_role->value();
        $this->_role->value($args[0]);
        return $this;
    }
    /**
     * @access private
     * @return string
     */
    function openTag() {
        $string = '';
        if ($this->_fieldContain) $string.= '<div data-role="fieldcontain">';
        if ($this->_label->text()!='') $string.= $this->_label;
        $string.= parent::openTag();
        return $string;
    }
    /**
     * @access private
     * @return string
     */
    function closeTag() {
        $string = '';
        $string.= parent::closeTag();
        if ($this->_fieldContain) $string.= '</div>';
        return $string;
    }
}
?>