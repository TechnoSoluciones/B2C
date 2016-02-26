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
 * This class represents the 'div' tag (data-role="footer").
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
class Footer extends Header
{
    private $_group;

    /**
     *
     * @param string $id
     * @param array $attributes
     * @param array $items
     * @param string $theme
     * @param string $title
     * @param string $position
     * @param boolean $group
     */
    public function __construct(
        $id = '',
        $attributes = array(),
        $items = array(),
        $theme = '',
        $title = '',
        $position = 'inline',
        $group = false
    ) {
        parent::__construct($id, $attributes, $items, $theme, $title, $position);
        $this->_role = $this->attribute('data-role', 'footer', true);
        $this->group($group);
    }

    /**
     * Gets and sets the group property.
     * If the group is true an automatic div data-role="controlgroup" is generated.
     * @param boolean $value
     * @return bool|Footer
     */
    public function group()
    {
        if (func_num_args() === 0) {
            return $this->_group;
        }
        $this->_group = func_get_arg(0);
        $this->items()->prefix((($this->_group) ? '<div data-role="controlgroup" data-type="horizontal">' : ''));
        $this->items()->suffix((($this->_group) ? '</div>' : ''));
        return $this;
    }
}