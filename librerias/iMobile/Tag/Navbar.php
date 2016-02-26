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
 * This class represents the 'div' tag (data-role="navbar").
 * @class navbar
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
class Navbar extends Tag
{
    private $_role;

    /**
     *
     * @param string $id
     * @param array $attributes
     * @param array $items
     * @param string $theme
     */
    public function __construct($id = '', array $attributes = array(), array $items = array(), $theme = '')
    {
        parent::__construct('div', $id, $attributes, $items, $theme);
        $this->_role = $this->attribute('data-role', 'navbar', true);
        $this->items()->prefix('<ul><li>');
        $this->items()->separator('</li><li>');
        $this->items()->suffix('</li></ul>');
    }

    /**
     * Adds a button (button).
     * @param string $text
     * @param string $href
     * @param string $theme
     * @param string $icon
     * @param boolean $returnAdded
     * @return navbar|button
     */
    public function addButton($text, $href = '', $theme = '', $icon = '', $returnAdded = false)
    {
        $bt = $this->add(new button(), true);
        $bt->text($text)->href($href)->theme($theme)->icon($icon);
        if ($returnAdded === true) {
            return $bt;
        }
        return $this;
    }

    /**
     *
     * @param string $value
     * @return string|content
     */
    public function role()
    {
        if (func_num_args() === 0) {
            return $this->_role->value();
        }
        $this->_role->value(func_get_arg(0));
        return $this;
    }
}

