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
   * Sets the library folder name.
   * @var JQMPHP_FOLDER
   */
  define('JQMPHP_FOLDER','lib',true);
  /**
   * Sets the library path.
   * @var JQMPHP_PATH
   */
  define('JQMPHP_PATH',realpath(dirname(__FILE__).'/../'.JQMPHP_FOLDER.'/').'/',true);
  /**
   * Sets the Application Default Title.
   * @var JQMPHP_TITLE
   */
  define('JQMPHP_TITLE','',true);
  /**
   * Sets the jQuery path.
   * @var JQMPHP_JQ
   */
  define('JQMPHP_JQ','http://code.jquery.com/jquery-1.5.min.js',true);

  /**
   * Sets the jQuery Mobile path.
   * @var JQMPHP_JQM
   */
  define('JQMPHP_JQM','http://code.jquery.com/mobile/1.0a3/jquery.mobile-1.0a3.min.js',true);

  /**
   * Sets the jQuery Mobile CSS path.
   * @var JQMPHP_CSS
   */
  define('JQMPHP_CSS','http://code.jquery.com/mobile/1.0a3/jquery.mobile-1.0a3.min.css',true);

  /**
   * Sets the Default Doctype.
   * @var JQMPHP_DOCTYPE
   */
  define('JQMPHP_DOCTYPE','html',true);

  /**
   * Sets the Default Xmlns.
   * @var JQMPHP_XMLNS
   */
  define('JQMPHP_XMLNS','http://www.w3.org/1999/xhtml',true);

  /**
   * Sets the Default Charset.
   * @var JQMPHP_CHARSET
   */
  define('JQMPHP_CHARSET','UTF-8',true);

  /*
   * Includes required files.
   */
  require_once JQMPHP_PATH.'Collection.php';
  require_once JQMPHP_PATH.'Tag.php';
  require_once JQMPHP_PATH.'Attribute.php';
  require_once JQMPHP_PATH.'Body.php';
  require_once JQMPHP_PATH.'Button.php';
  require_once JQMPHP_PATH.'Collapsible.php';
  require_once JQMPHP_PATH.'Content.php';
  require_once JQMPHP_PATH.'Controlgroup.php';
  require_once JQMPHP_PATH.'Fieldcontain.php';
  require_once JQMPHP_PATH.'Header.php';
  require_once JQMPHP_PATH.'Footer.php';
  require_once JQMPHP_PATH.'Form.php';
  require_once JQMPHP_PATH.'Grid.php';
  require_once JQMPHP_PATH.'Head.php';
  require_once JQMPHP_PATH.'Html.php';
  require_once JQMPHP_PATH.'Inline.php';
  require_once JQMPHP_PATH.'Input.php';
  require_once JQMPHP_PATH.'Checkboxgroup.php';
  require_once JQMPHP_PATH.'Label.php';
  require_once JQMPHP_PATH.'Listitem.php';
  require_once JQMPHP_PATH.'Listview.php';
  require_once JQMPHP_PATH.'Link.php';
  require_once JQMPHP_PATH.'Navbar.php';
  require_once JQMPHP_PATH.'Option.php';
  require_once JQMPHP_PATH.'Page.php';
  require_once JQMPHP_PATH.'Radiogroup.php';
  require_once JQMPHP_PATH.'Range.php';
  require_once JQMPHP_PATH.'Script.php';
  require_once JQMPHP_PATH.'Select.php';
  require_once JQMPHP_PATH.'Slider.php';
  require_once JQMPHP_PATH.'Text.php';
  require_once JQMPHP_PATH.'Textarea.php';
  require_once JQMPHP_PATH.'Title.php';

  /**
   * Php - HTML code generator for jQuery Mobile Framework
   * @class Php
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
  class Php{

      private $_html;

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
      $doctype=JQMPHP_DOCTYPE,$xmlns=JQMPHP_XMLNS,$charset=JQMPHP_CHARSET,$title=JQMPHP_TITLE,$css=JQMPHP_CSS,$jq=JQMPHP_JQ,$jqm=JQMPHP_JQM){
          $this->_html=new Html($doctype,$xmlns,$charset,$title,$css,$jq,$jqm);
      }

      /**
       * @access private
       * @return string
       */
      function __toString(){
          $string='';
          $string.= $this->_html;
          return $string;
      }

      /**
       * Gets the 'HTML' element (Html).
       * @return Html
       */
      function html(){
          return $this->_html;
      }

      /**
       * Gets the 'HEAD' element (Head).
       * @return Head
       */
      function head(){
          return $this->html()->head();
      }

      /**
       * Gets the 'BODY' element (Body).
       * @return Body
       */
      function body(){
          return $this->html()->body();
      }

      /**
       * Adds a page (Page) to the pages collection of HTML Body element (Body).
       * @param Page $page
       * @param bool $returnAdded
       * @return Php|Page
       */
      function addPage($page,$returnAdded=false){
          $this->_html->body()->addPage($page);
          if($returnAdded)
              return $page;
          return $this;
      }

      /**
       * Adds a page (Page) to the pages collection of HTML Body element (Body).
       * @param Page $page
       * @param bool $returnAdded
       * @return Php|Page
       */
      function addBasicPage($id,$title,$content,$returnAdded=false){
          $page=new Page($id);
          $page->title($title)->addContent($content);
          $this->_html->body()->addPage($page);
          if($returnAdded)
              return $page;
          return $this;
      }

      /**
       * Gets the pages collection in HTML Body (Body).
       * @return Collection
       */
      function pages(){
          return $this->_html->body()->pages();
      }

  }

?>
