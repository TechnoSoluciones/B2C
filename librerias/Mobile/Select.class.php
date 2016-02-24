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
 * This class represents the 'select' tag.
 * @class Select
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
class Select extends Tag {
    private $_name;
    private $_label;
    private $_fieldContain;
    private $_icon;
    private $_inline;
    /**
     *
     * @param string $id
     * @param string $name
     * @param string $label
     * @param array $items
     * @param string $theme
     * @param bool $fieldContain
     * @param string $icon
     * @param bool $inline
     */
    function __construct($id='', $name='', $label='', $items=array(), $theme='', $fieldContain=false, $icon='', $inline=false) {
        parent::__construct('select', $id, '', $items, $theme);
        $this->_name = $this->addAttribute(new Attribute('name', $name, true), true);
        $this->_label = new Label('', $label, $name);
        $this->_fieldContain = $fieldContain;
        $this->_icon = $this->attribute('data-icon', $icon, true);
        $this->_inline = $this->attribute('data-inline', (($inline) ? 'true':''), true);
    }
    /**
     * Adds an option.
     * @param string $text
     * @param string $value
     * @param bool $selected
     * @param bool $returnAdded
     * @return Select|Option
     */
    function addOption($text, $value='', $selected=false, $returnAdded=false) {
        $opt = $this->add(new Option($text, $value, $selected), true);
        if ($returnAdded) return $opt;
        return $this;
    }
    /**
     * Gets and sets the name attribute.
     * @param string $value
     * @return string|Select
     */
    function name() {
        $args = func_get_args();
        if (count($args) == 0) return $this->_name->value();
        $this->_name->value($args[0]);
        $this->_label->forField($this->_name);
        return $this;
    }
    /**
     * Gets and sets the label property.
     * @param string $value
     * @return string|Select
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
     * @return bool|Select
     */
    function fieldContain(){
        $args = func_get_args();
        if (count($args) == 0) return $this->_fieldContain;
        $this->_fieldContain = $args[0];
        return $this;
    }
    /**
     * Gets and sets the icon property (data-icon="gear").
     * @param string $value
     * @return string|Select
     */
    function icon(){
        $args = func_get_args();
        if (count($args) == 0) return $this->_icon->value();
        $this->_icon->value($args[0]);
        return $this;
    }
    /**
     * Gets and sets the inline property (data-inline="true").
     * @param bool $value
     * @return bool|Select
     */
    function inline() {
        $args = func_get_args();
        if (count($args) == 0) return ($this->_inline->value()=='true') ? true : false;
        $this->_inline->value(($args[0]) ? 'true' : '');
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