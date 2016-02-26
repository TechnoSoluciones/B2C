<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');
include dirname(dirname(__FILE__)) . '/vendor/autoload.php';
use iMobile\Container as Container;
use iMobile\Tag\Input;
use iMobile\Tag\Listview;
use iMobile\Tag\Page;
use iMobile\Tag\Script;
use iMobile\Tag;


/**
 * Create a new Php object.
 */
$iMobile = new Container();

/**
 * Adding custom JavaScript to head in iMobile
 */
$iMobile->head()->title('Custom JS Example');
$iMobile->head()->add(new Script('custom.js'));


/**
 * Create a new page object.
 */
$p = new Page('custom-js');
$p->theme('b');
$p->title('Custom JS Example');
$p->header()->theme('a');
$bt = $p->header()->addButton('', 'index.php', 'a', 'home', false, false, true);
$bt->rel('external')->attribute('data-iconpos', 'notext');

/**
 * Adding Content.
 */
$p->addContent('<h1>Adding Custom JavaScript</h1>');
$p->addContent(
    '<p align="justify">To add a custom JS you need add the tag <b>' . htmlspecialchars('<script...></script>') . '</b>'
);
$p->addContent(' to the head object [<b>' . htmlspecialchars('$iMobile->head()') . '</b>] in the iMobile instance. ');
$p->addContent('To facilitate the addition of JS you can use the class <b>script</b> as example:</p>');
$p->addContent(
    '<pre class="ui-body-c" style="padding:20px;">$iMobile = new Php();' . "\n" . '$iMobile->head()->add(' . "\n\t" . 'new script(\'custom.js\')' . "\n" . ');</pre>'
);
$p->addContent(new Tag('p', 'p_js', array('class="ui-body-c" style="padding:20px;"'), array('&nbsp;')));


/**
 * Adding Source Code Links.
 */
$list = new Listview();
$list->inset(true)->dividerTheme('a');
$list->addDivider('Source Code');
$li = $list->addBasic('custom.js', 'custom.js', '', true);
$li->rel('external')->target('_blank');
$li = $list->addBasic('custom-js.php', 'custom-js.php.txt', '', true);
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