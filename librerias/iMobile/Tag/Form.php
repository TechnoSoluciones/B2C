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
 * This class represents the 'form' tag.
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
class Form extends Tag
{
    private $_action;
    private $_method;

    /**
     *
     * @param string $id
     * @param array $attributes
     * @param array $items
     * @param string $theme
     * @param string $action
     * @param string $method
     */
    public function __construct(
        $id = '',
        array $attributes = array(),
        array $items = array(),
        $theme = '',
        $action = '',
        $method = 'POST'
    ) {
        parent::__construct('form', $id, $attributes, $items, $theme);
        $this->_action = $this->attribute('action', $action, true);
        $this->_method = $this->attribute('method', $method, true);
    }

    /**
     * Gets and sets the action attribute.
     *
     * @param string $value
     * @return string|self
     */
    public function action()
    {
        if (func_num_args() === 0) {
            return $this->_action->value();
        }
        $this->_action->value(func_get_arg(0));
        return $this;
    }

    /**
     * Gets and sets the action attribute.
     * @param string $value
     * @return string|self
     */
    public function method()
    {
        if (func_num_args() === 0) {
            return $this->_method->value();
        }
        $this->_method->value(func_get_arg(0));
        return $this;
    }
}
