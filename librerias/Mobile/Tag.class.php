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
 * This class represents an html tag.
 * @class Tag
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
class Tag {
    private $_tag;
    private $_id;
    private $_attributes;
    private $_items;
    private $_theme;
    /**
     *
     * @param string $name
     * @param string $id
     * @param array $attributes
     * @param array $items
     * @param string $theme
     */
    function __construct($tag, $id='', $attributes=array(), $items=array(), $theme=''){
         $this->_tag = $tag;
         $this->_attributes = new Collection($attributes);
         $this->_items = new Collection($items);
         $this->_id = $this->attribute('id', $id, true);
         $this->_theme = $this->attribute('data-theme', $theme, true);
    }
    /**
     * @access private
     * @return string
     */
    function __toString() {
        $string = $this->openTag();
        $string.= $this->items();
        $string.= $this->closeTag();
        return $string;
    }
    /**
     * Gets a collection of attributes of the tag.
     * @return Collection
     */
    function attributes() {
        return $this->_attributes;
    }
    /**
     * Gets and sets the an attribute.
     * @param string $name
     * @param string $value
     * @param bool $returnAttribute
     * @return string|Tag|Attribute
     */
    function attribute() {
        $args = func_get_args();
        if (count($args) == 0) return '';
        for ($i = 0; $i < $this->attributes()->size(); $i++) {
            if (is_object($this->attributes()->get($i)) && get_class($this->attributes()->get($i)) == 'Attribute') {
                if ($this->attributes()->get($i)->name() == $args[0]) {
                    if (count($args) == 1) return $this->attributes()->get($i)->value();
                    $this->attributes()->get($i)->value($args[1]);
                    if (count($args) == 3 && $args[2]) return $this->attributes()->get($i);
                    return $this;
                }
            }
        }
        if (count($args) == 1) return '';
        return $this->addAttribute(new Attribute($args[0], $args[1]), (count($args) == 3 && $args[2]));
    }
    /**
     * Adds an attribute.
     * @param Attribute $attribute
     * @param bool $returnAttribute
     * @return Tag|Attribute
     */
    function addAttribute($attribute,$returnAttribute=false) {
        $this->attributes()->add($attribute);
        if ($returnAttribute) return $attribute;
        return $this;
    }
    /**
     * Gets a collection of items of the tag.
     * @return Collection
     */
    function items() {
        return $this->_items;
    }
    /**
     * Adds an item.
     * @param mixed $item
     * @param bool $returnItem
     * @return Tag|mixed
     */
    function add($item,$returnItem=false) {
        $this->items()->add($item);
        if ($returnItem) return $item;
        return $this;
    }
    /**
     * Gets and sets the HTML tag.
     * @param string $value
     * @return string|Tag
     */
    function tag() {
        $args = func_get_args();
        if (count($args) == 0) return $this->_tag;
        $this->_tag = $args[0];
        return $this;
    }
    /**
     * Gets and sets the id attribute.
     * @param string $value
     * @return string|Tag
     */
    function id(){
        $args = func_get_args();
        if (count($args) == 0) return $this->_id->value();
        $this->_id->value($args[0]);
        return $this;
    }
    /**
     * Gets and sets the theme attribute (data-theme="a").
     * @param string $value
     * @return string|Tag
     */
    function theme() {
        $args = func_get_args();
        if (count($args) == 0) return $this->_theme->value();
        $this->_theme->value($args[0]);
        return $this;
    }
    /**
     * @access private
     * @return string
     */
    function openTag() {
        $string = '<'.$this->tag();
        if ($this->attributes()->size() > 0) {
            $this->attributes()->separator(' ');
            if (''.$this->attributes()->get(0) != '') $string.=' ';
            $string.= $this->attributes();
        }
        $string.= '>';
        return $string;
    }
    /**
     * @access private
     * @return string
     */
    function closeTag() {
        $string = '</'.$this->tag().'>';
        return $string;
    }
}
?>