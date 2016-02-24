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
 * This class represents the 'head' tag
 * @author Jose Alexis Correa Valencia <jalexiscv@gmail.com>
 * @copyright Copyright (c) 2016, Jose Alexis Correa Valencia
 * @license http://www.gnu.org/licenses/gpl.html GNU Public License
 * @package Php
 * @version 0.03
 * @since 0.01
 * @link http://www.php.com/ Php Website
 * @link http://code.google.com/p/php/ Php Project Website
 * @link http://www.jquerymobile.com jQuery Mobile Website
 * @filesource
 */
class Head extends Tag {
    private $_xmlns;
    private $_charset;
    private $_title;
    private $_css;
    private $_jq;
    private $_;
    /**
     *
     * @param string $xmlns
     * @param string $charset
     * @param string $title
     * @param string $css
     * @param string $jq
     * @param string $
     */
    function __construct(
        $xmlns=JQMPHP_XMLNS,
        $charset=JQMPHP_CHARSET,
        $title=JQMPHP_TITLE,
        $css=JQMPHP_CSS,
        $jq=JQMPHP_JQ,
        $jqm=JQMPHP_JQM){
        parent::__construct('head');
        $this->_xmlns = $this->attribute('xmlns', $xmlns, true);
        $this->_charset = new Attribute('charset', $charset); $this->add(new Tag('meta', '', array($this->_charset)));
        $this->_css = $this->add(new Link($css),true);
        $this->_jq = $this->add(new Script($jq),true);
        $this->_jqm= $this->add(new Script($jqm),true);
        $this->_title = new Text($title); $this->add(new Tag('title', '', '', array($this->_title)));
    }
    /**
     * Gets and sets the xmlns property.
     * @param string $value
     * @return string|Head
     */
    function xmlns(){
        $args = func_get_args();
        if (count($args) == 0) return $this->_xmlns->value();
        $this->_xmlns->value($args[0]);
        return $this;
    }
    /**
     * Gets and sets the charset property.
     * @param string $value
     * @return string|Head
     */
    function charset(){
        $args = func_get_args();
        if (count($args) == 0) return $this->_charset->value();
        $this->_charset->value($args[0]);
        return $this;
    }
    /**
     * Gets and sets the title property.
     * @param string $value
     * @return string|Head
     */
    function title(){
        $args = func_get_args();
        if (count($args) == 0) return $this->_title->text();
        $this->_title->text($args[0]);
        return $this;
    }
    /**
     * Gets and sets the path to the jQuery Mobile CSS file.
     * @param string $value
     * @return string|Head
     */
    function css(){
        $args = func_get_args();
        if (count($args) == 0) return $this->_css->href();
        $this->_css->href($args[0]);
        return $this;
    }
    /**
     * Gets and sets the path to the jQuery JavaScript file
     * @param string $value
     * @return string|Head
     */
    function jq(){
        $args = func_get_args();
        if (count($args) == 0) return $this->_jq->src();
        $this->_jq->src($args[0]);
        return $this;
    }
    /**
     * Gets and sets the path to the jQuery Mobile JavaScript file
     * @param string $value
     * @return string|Head
     */
    function jqm (){
        $args = func_get_args();
        if (count($args) == 0) return $this->_->src();
        $this->_->src($args[0]);
        return $this;
    }
}
?>
