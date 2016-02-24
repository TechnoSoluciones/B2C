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
 * This class represents the 'html' tag.
 * @class Html
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
class Html extends Tag  {
    private $_doctype;
    private $_head;
    private $_body;
    /**
     *
     * @param string $doctype
     * @param string $xmlns
     * @param string $charset
     * @param string $title
     * @param string $css
     * @param string $jq
     * @param string $ 
     */
    function __construct(
        $doctype=JQMPHP_DOCTYPE,
        $xmlns=JQMPHP_XMLNS,
        $charset=JQMPHP_CHARSET,
        $title=JQMPHP_TITLE,
        $css=JQMPHP_CSS,
        $jq=JQMPHP_JQ,
        $jqm=JQMPHP_JQM){
         parent::__construct('html');
         $this->_doctype = new Text($doctype);
         $this->_head = $this->add(new Head($xmlns,$charset,$title,$css,$jq,$jqm),true);
         $this->_body = $this->add(new Body(),true);
    }
    /**
     * @access private
     * @return string
     */
    function __toString(){
        $string = '<!DOCTYPE '.$this->doctype().'>';
        $string.= parent::__toString();
        return $string;
    }
    /**
     * Gets and sets the doctype property.
     * @param string $value
     * @return string|Html
     */
    function doctype(){
        $args = func_get_args();
        if (count($args) == 0) return $this->_doctype->text();
        $this->_doctype->text($args[0]);
        return $this;
    }
    /**
     * Gets the Head element (Head).
     * @return Head
     */
    function head() {
        return $this->_head;
    }
    /**
     * Gets the Body element (Body).
     * @return Body
     */
    function body() {
        return $this->_body;
    }
    /**
     * Adds a page to the pages collection of HTML Body element (Body).
     * @param Page $page
     * @param bool $returnAdded
     * @return Html|Page
     */
    function addPage($page, $returnAdded=false) {
        $this->body()->addPage($page);
        if ($returnAdded) return $page;
        return $this;
    }
    /**
     * Gets the pages collection in HTML Body (Body).
     * @return Collection
     */
    function pages() {
        return $this->_body()->pages();
    }
}
?>
