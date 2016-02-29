<?php
/**
 * This class represents the 'head' tag
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
 * @filesource
 */
class Head extends Tag
{
    private $xmlns;
    private $charset;
    private $viewport;
    private $css;
    private $jq;
    private $jqm;

    /**
     * @param string $xmlns
     * @param string $charset
     * @param array|string $title
     * @param array|string $css
     * @param string $jq
     * @param string $jqm
     */
    public function __construct(
        $xmlns = Container::XMLNS,
        $charset = Container::CHARSET,
        $title = Container::TITLE,
        $css = Container::CSS,
        $jq = Container::JQUERY_PATH,
        $jqm = Container::JQUERY_MOBILE_PATH
    ) {
        parent::__construct('head');
        $this->xmlns = $this->attribute('xmlns', $xmlns, true);
        $this->charset = $this->addAttribute(new Attribute('charset', $charset), true);
        $this->add(new Tag('meta', '', array($this->charset)));
        $this->viewport = $this->addAttribute(new Attribute('content', Container::VIEWPORT), true);
        $this->add(new Tag('meta', '', array(new Attribute('name', 'viewport'), $this->viewport)));
        $this->css = $this->add(new Link($css), true);
        $this->jq = $this->add(new Script($jq), true);
        $this->jqm = $this->add(new Script($jqm), true);
        $this->add(new Tag('title', '', array(), array(new Text($title))));
    }

    /**
     * Gets and sets the title property
     *
     * @param string $value
     * @return string|header
     */
    public function title()
    {
        if (func_num_args() === 0) {
            return $this->title->text();
        }
        $this->title->text(func_get_arg(0));

        return $this;
    }

    /**
     * Gets and sets the xmlns property.
     *
     * @param string $value
     * @return string|self
     */
    public function xmlns()
    {
        if (func_num_args() === 0) {
            return $this->xmlns->value();
        }
        $this->xmlns->value(func_get_arg(0));
        return $this;
    }

    /**
     * Gets and sets the charset property.
     * @param string $value
     * @return string|head
     */
    public function charset()
    {
        if (func_num_args() === 0) {
            return $this->charset->value();
        }
        $this->charset->value(func_get_arg(0));
        return $this;
    }

    /**
     * Gets and sets the viewport property.
     * @param string $value
     * @return string|head
     */
    public function viewport()
    {
        if (func_num_args() === 0) {
            return $this->viewport->value();
        }
        $this->viewport->value(func_get_arg(0));
        return $this;
    }


    /**
     * Gets and sets the path to the jQuery Mobile CSS file.
     * @param string $value
     * @return string|head
     */
    public function css()
    {
        if (func_num_args() === 0) {
            return $this->css->href();
        }
        $this->css->href(func_get_arg(0));
        return $this;
    }

    /**
     * Gets and sets the path to the jQuery JavaScript file
     * @param string $value
     * @return string|head
     */
    public function jq()
    {
        if (func_num_args() === 0) {
            return $this->jq->src();
        }
        $this->jq->src(func_get_arg(0));
        return $this;
    }

    /**
     * Gets and sets the path to the jQuery Mobile JavaScript file
     * @param string $value
     * @return string|head
     */
    public function jqm()
    {
        if (func_num_args() === 0) {
            return $this->jqm->src();
        }
        $this->jqm->src(func_get_arg(0));
        return $this;
    }
}