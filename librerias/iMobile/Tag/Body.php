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
 * This class represents the 'body' tag.
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
class Body extends Tag
{
    private $_pages;

    /**
     *
     * @param string $id
     * @param array $attributes
     * @param array $items
     * @param Page[] $pages
     */
    public function __construct($id = '', array $attributes = array(), array $items = array(), array $pages = array())
    {
        parent::__construct('body', $id, $attributes, $items);
        $this->_pages = $this->add(new Collection($pages), true);
    }

    /**
     * Gets the pages collection in HTML Body
     *
     * @return Collection
     */
    public function pages()
    {
        return $this->_pages;
    }

    /**
     * Adds a page to the pages collection of HTML Body element
     *
     * @param Page $page
     * @param boolean $returnAdded
     * @return self|Page
     */
    public function addPage(Page $page, $returnAdded = false)
    {
        $this->pages()->add($page);
        if ($returnAdded === true) {
            return $page;
        }
        return $this;
    }
}

