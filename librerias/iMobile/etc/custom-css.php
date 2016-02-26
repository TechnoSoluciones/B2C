<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');
include dirname(dirname(__FILE__)) . '/vendor/autoload.php';
use iMobile\Container as Container;
use iMobile\Tag\Input;
use iMobile\Tag\Link;
use iMobile\Tag\Listview;
use iMobile\Tag\Page;


/**
 * Adding custom CSS
 * @package iMobile
 * @filesource
 */


/**
 * Create a new Php object.
 */
$iMobile = new Container();

/**
 * Adding custom CSS to head in iMobile
 */
$iMobile->head()->title('Custom CSS Example');
$iMobile->head()->add(new Link('custom.css'));


/**
 * Create a new page object.
 */
$p = new Page('custom-css');
$p->theme('b');
$p->title('Custom CSS Example');
$p->header()->theme('a');
$bt = $p->header()->addButton('', 'index.php', 'a', 'home', false, false, true);
$bt->rel('external')->attribute('data-iconpos', 'notext');

/**
 * Adding Content.
 */
$p->addContent('<h1>Adding Custom CSS</h1>');
$p->addContent(
    '<p align="justify">To add a custom CSS you need add the tag <b>' . htmlspecialchars('<link...></link>') . '</b>'
);
$p->addContent(' to the head object [<b>' . htmlspecialchars('$iMobile->head()') . '</b>] in the iMobile instance. ');
$p->addContent('To facilitate the addition of CSS you can use the class <b>link</b> as example:</p>');
$p->addContent(
    '<pre class="ui-body-c">$iMobile = new Php();' . "\n" . '$iMobile->head()->add(' . "\n\t" . 'new link(\'custom.css\')' . "\n" . ');</pre>'
);


/**
 * Adding Source Code Links.
 */
$list = new Listview();
$list->inset(true)->dividerTheme('a');
$list->addDivider('Source Code');
$li = $list->addBasic('custom.css', 'custom.css', '', true);
$li->rel('external')->target('_blank');
$li = $list->addBasic('custom-css.php', 'custom-css.php.txt', '', true);
$li->rel('external')->target('_blank');
$p->addContent($list);

/**
 * Add the page to iMobile object.
 */
$iMobile->addPage($p);

/**
 * Generate the HTML code.
 */
echo $iMobile;