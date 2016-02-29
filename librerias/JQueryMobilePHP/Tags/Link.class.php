<?php
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
    private $href;

    /**
     *
     * @param string $href
     */
    public function __construct($href = '')
    {
        parent::__construct('link');
        $this->attribute('type', 'text/css');
        $this->attribute('rel', 'stylesheet');
        $this->href = $this->attribute('href', $href, true);
    }

    /**
     * Gets and sets the href attribute.
     * @param string $value
     * @return string|link
     */
    public function href()
    {
        if (func_num_args() === 0) {
            return $this->href->value();
        }
        $this->href->value(func_get_arg(0));
        return $this;
    }
}
