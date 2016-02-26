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
 * This class represents the 'body' tag.
 * @class Body
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
class Body extends Tag {
    private $_pages;
    /**
     *
     * @param string $id
     * @param array $attributes
     * @param array $items
     * @param array $pages
     */
    function __construct($id='', $attributes=array(), $items=array(), $pages=array()){
        parent::__construct('body', $id, $attributes, $items);
        $this->_pages = $this->add(new Collection($pages),true);
    }
    /**
     * Gets the pages collection in HTML Body (Body).
     * @return Collection
     */
    function pages() {
        return $this->_pages;
    }
    /**
     * Adds a page to the pages collection of HTML Body element (Body).
     * @param Page $page
     * @param bool $returnAdded
     * @return Body|Page
     */
    function addPage($page, $returnAdded=false) {
        $this->pages()->add($page);
        if ($returnAdded) return $page;
        return $this;
    }
}
?>