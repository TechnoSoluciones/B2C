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
 * This class represents the 'a' tag (data-role="button").
 * @class Button
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
class Button extends Tag {
    private $_href;
    private $_text;
    private $_icon;
    private $_role;
    private $_active;
    private $_inline;
    private $_rel;
    private $_target;
    /**
     *
     * @param string $id
     * @param string $href
     * @param string $text
     * @param string $icon
     * @param string $theme
     * @param bool $active
     * @param bool $inline
     */
    function __construct($id='', $attributes=array(), $items=array(), $theme='', $href='', $text='', $icon='', $active=false, $inline=false, $rel='', $target='') {
        parent::__construct('a', $id, $attributes, $items, $theme);
        $this->_href = $this->attribute('href', $href, true);
        $this->_icon = $this->attribute('data-icon', $icon, true);
        $this->_role = $this->attribute('data-role', 'button', true);
        $this->active($active);
        $this->_inline = $this->attribute('data-inline', (($inline) ? 'true':''), true);
        $this->_text = $this->add(new Text($text),true);
        $this->_rel = $this->addAttribute(new Attribute('rel', $rel, false), true);
        $this->_target = $this->addAttribute(new Attribute('target', $target, false), true);
    }
    /**
     * Gets and sets the active property (class="ui-btn-active").
     * @param bool $value
     * @return bool|Button
     */
    function active(){
        $args = func_get_args();
        if (count($args) == 0) return $this->_active;
        $this->_active = $args[0];
        $this->attribute('class', (($this->_active)? 'ui-btn-active':''));
        return $this;
    }
    /**
     * Gets and sets the inline property (data-inline="true").
     * @param bool $value
     * @return bool|Button
     */
    function inline() {
        $args = func_get_args();
        if (count($args) == 0) return ($this->_inline->value()=='true') ? true : false;
        $this->_inline->value(($args[0]) ? 'true' : '');
        return $this;
    }
    /**
     * Gets and sets the href property.
     * @param string $value
     * @return string|Button
     */
    function href(){
        $args = func_get_args();
        if (count($args) == 0) return $this->_href->value();
        $this->_href->value($args[0]);
        return $this;
    }
    /**
     * Gets and sets the rel property.
     * @param string $value
     * @return string|Listitem
     */
    function rel() {
        $args = func_get_args();
        if (count($args) == 0) return $this->_rel->value();
        $this->_rel->value($args[0]);
        return $this;
    }
    /**
     * Gets and sets the target property.
     * @param string $value
     * @return string|Listitem
     */
    function target() {
        $args = func_get_args();
        if (count($args) == 0) return $this->_target->value();
        $this->_target->value($args[0]);
        return $this;
    }
    /**
     * Gets and sets the text property.
     * @param string $value
     * @return string|Button
     */
    function text(){
        $args = func_get_args();
        if (count($args) == 0) return $this->_text->text();
        $this->_text->text($args[0]);
        return $this;
    }
    /**
     * Gets and sets the icon property (data-icon='gear').
     * @param string $value
     * @return string|Button
     */
    function icon(){
        $args = func_get_args();
        if (count($args) == 0) return $this->_icon->value();
        $this->_icon->value($args[0]);
        return $this;
    }
    /**
     * @access private
     * @param string $value
     * @return string|Button
     */
    function role() {
        $args = func_get_args();
        if (count($args) == 0) return $this->_role->value();
        $this->_role->value($args[0]);
        return $this;
    }
}
?>