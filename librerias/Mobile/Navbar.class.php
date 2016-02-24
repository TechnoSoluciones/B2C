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
 * This class represents the 'div' tag (data-role="navbar").
 * @class Navbar
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
class Navbar extends Tag {
    private $_role;
    /**
     *
     * @param string $id
     * @param array $attributes
     * @param array $items
     * @param string $theme
     */
    function __construct($id='', $attributes=array(), $items=array(), $theme=''){
        parent::__construct('div', $id, $attributes, $items, $theme);
        $this->_role = $this->attribute('data-role', 'navbar', true);
        $this->items()->prefix('<ul><li>');
        $this->items()->separator('</li><li>');
        $this->items()->suffix('</li></ul>');
    }
    /**
     * Adds a button (Button).
     * @param string $text
     * @param string $href
     * @param string $theme
     * @param string $icon
     * @param bool $returnAdded
     * @return Navbar|Button
     */
    function addButton($text, $href='', $theme='', $icon='', $returnAdded=false) {
        $bt = $this->add(new Button(), true);
        $bt->text($text)->href($href)->theme($theme)->icon($icon);
        if ($returnAdded) return $bt;
        return $this;
    }
    /**
     * @access private
     * @param string $value
     * @return string|Content
     */
    function role() {
        $args = func_get_args();
        if (count($args) == 0) return $this->_role->value();
        $this->_role->value($args[0]);
        return $this;
    }
}
?>
