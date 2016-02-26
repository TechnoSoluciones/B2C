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
 * This class represents the 'div' tag (data-role="collapsible").
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
class Collapsible extends Tag
{
    private $_role;
    private $_collapsed;

    /**
     *
     * @param string $id
     * @param array $attributes
     * @param array $items
     * @param string $theme
     * @param string $title
     * @param boolean $collapsed
     */
    public function __construct(
        $id = '',
        array $attributes = array(),
        array $items = array(),
        $theme = '',
        $title = '',
        $collapsed = true
    ) {
        parent::__construct('div', $id, $attributes, array(), $theme);
        $this->_role = $this->attribute('data-role', 'collapsible', true);
        $this->_collapsed = $this->attribute('data-collapsed', (($collapsed) ? 'true' : 'false'), true);
        $this->_title = $this->add(new Title($title), true);
        $this->items()->addFromArray($items);
    }


    /**
     * Gets and sets the collapsed property (data-colapsed="true").
     * @param boolean $value
     * @return bool|collapsible
     */
    public function collapsed()
    {
        if (func_num_args() === 0) {
            return ($this->_collapsed->value() == 'true') ? true : false;
        }
        $this->_collapsed->value(func_get_arg(0) === true ? 'true' : 'false');
        return $this;
    }

    /**
     *
     * @param string $value
     * @return string|collapsible
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