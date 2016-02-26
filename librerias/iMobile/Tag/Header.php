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
 * This class represents the 'div' tag (data-role="header").
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
class Header extends Tag
{
    protected $_role;
    private $_position;
    private $_uiBar;

    /**
     * @param string $id
     * @param array $attributes
     * @param array $items
     * @param string $theme
     * @param string $title
     * @param string $position
     * @param bool $uiBar
     */
    public function __construct(
        $id = '',
        $attributes = array(),
        $items = array(),
        $theme = '',
        $title = '',
        $position = 'inline',
        $uiBar = false
    ) {
        parent::__construct('div', $id, $attributes, $items, $theme);
        $this->_role = $this->attribute('data-role', 'header', true);
        $this->_position = $this->attribute('data-position', $position, true);
        $this->_uiBar = $this->attribute('class', ($uiBar) ? 'ui-bar' : '', true);
        $this->_title = $this->add(new Title($title), true);
    }

    /**
     *
     * @return string
     */
    public function __toString()
    {
        $string = '';
        if ($this->title() != '' || $this->items()->size() > 1) {
            $string = parent::__toString();
        }
        return $string;
    }

    /**
     *
     * @param string $value
     * @return string|header
     */
    public function role()
    {
        if (func_num_args() === 0) {
            return $this->_role->value();
        }
        $this->_role->value(func_get_arg(0));
        return $this;
    }

    /**
     * Gets and sets the position property (data-position="inline").
     * @param string $value
     * @return string|header
     */
    public function position()
    {
        if (func_num_args() === 0) {
            return $this->_position->value();
        }
        $this->_position->value(func_get_arg(0));
        return $this;
    }

    /**
     * Gets and sets the uiBar property (class="ui-bar").
     * @param string $value
     * @return string|header
     */
    public function uiBar()
    {
        if (func_num_args() === 0) {
            return ($this->_uiBar->value() == 'ui-bar') ? true : false;
        }
        $this->_uiBar->value(func_get_arg(0) === true ? 'ui-bar' : '');
        return $this;
    }

    /**
     * @param $text
     * @param string $href
     * @param string $theme
     * @param string $icon
     * @param bool $active
     * @param bool $inline
     * @param bool $returnAdded
     * @return $this|Tag|mixed
     */
    public function addButton(
        $text,
        $href = '',
        $theme = '',
        $icon = '',
        $active = false,
        $inline = false,
        $returnAdded = false
    ) {
        $button = new Button();
        $button->text($text)
            ->href($href)
            ->theme($theme)
            ->icon($icon)
            ->active($active)
            ->inline($inline);
        $this->add($button);
        if ($returnAdded === true) {
            return $button;
        }
        return $this;
    }
}