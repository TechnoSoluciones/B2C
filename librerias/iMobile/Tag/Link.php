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
 * This class represents the 'link' tag.
 * @class link
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
class Link extends Tag
{
    private $_href;

    /**
     *
     * @param string $href
     */
    public function __construct($href = '')
    {
        parent::__construct('link');
        $this->attribute('type', 'text/css');
        $this->attribute('rel', 'stylesheet');
        $this->_href = $this->attribute('href', $href, true);
    }

    /**
     * Gets and sets the href attribute.
     * @param string $value
     * @return string|link
     */
    public function href()
    {
        if (func_num_args() === 0) {
            return $this->_href->value();
        }
        $this->_href->value(func_get_arg(0));
        return $this;
    }
}
