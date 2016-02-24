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
 * This class represents the 'script' tag.
 * @class Script
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
class Script extends Tag {
    private $_src;
    /**
     *
     * @param string $src
     */
    function __construct($src='') {
        parent::__construct('script');
        $this->attribute('type', 'text/javascript');
        $this->_src = $this->attribute('src', $src, true);

    }
    /**
     * Gets and sets the src attribute.
     * @param string $value
     * @return string|Script
     */
    function src(){
        $args = func_get_args();
        if (count($args) == 0) return $this->_src->value();
        $this->_src->value($args[0]);
        return $this;
    }
}
?>