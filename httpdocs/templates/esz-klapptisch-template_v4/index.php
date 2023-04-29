<?php

/**
 * @package     Joomla.Site
 * @subpackage  Templates.klapptisch
 *
 * @copyright   (C) 2023 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Language\Text;
use Joomla\CMS\Uri\Uri;

/** @var Joomla\CMS\Document\HtmlDocument $this */

$app   = Factory::getApplication();
$input = $app->getInput();
$wa    = $this->getWebAssetManager();

// Browsers support SVG favicons
$this->addHeadLink(HTMLHelper::_('image', 'joomla-favicon.svg', '', [], true, 1), 'icon', 'rel', ['type' => 'image/svg+xml']);
$this->addHeadLink(HTMLHelper::_('image', 'favicon.ico', '', [], true, 1), 'alternate icon', 'rel', ['type' => 'image/vnd.microsoft.icon']);
$this->addHeadLink(HTMLHelper::_('image', 'joomla-favicon-pinned.svg', '', [], true, 1), 'mask-icon', 'rel', ['color' => '#000']);

// Template path
$templatePath = 'templates/' . $this->template;

// Detecting Active Variables
$option   = $input->getCmd('option', '');
$view     = $input->getCmd('view', '');
$layout   = $input->getCmd('layout', '');
$task     = $input->getCmd('task', '');
$itemid   = $input->getCmd('Itemid', '');
$sitename = htmlspecialchars($app->get('sitename'), ENT_QUOTES, 'UTF-8');
$menu     = $app->getMenu()->getActive();
$pageclass = $menu !== null ? $menu->getParams()->get('pageclass_sfx', '') : '';


// Logo file or site title param
if ($this->params->get('logoFile')) {
    $logo = HTMLHelper::_('image', Uri::root(false) . htmlspecialchars($this->params->get('logoFile'), ENT_QUOTES), $sitename, ['loading' => 'eager', 'decoding' => 'async'], false, 0);
} elseif ($this->params->get('siteTitle')) {
    $logo = '<span title="' . $sitename . '">' . htmlspecialchars($this->params->get('siteTitle'), ENT_COMPAT, 'UTF-8') . '</span>';
} else {
    $logo = HTMLHelper::_('image', 'logo.svg', $sitename, ['class' => 'logo d-inline-block', 'loading' => 'eager', 'decoding' => 'async'], true, 0);
}
?>
<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
<title>Klapptisch</title>
<link rel="icon" href="img/favicon.png" type="image/png" sizes="16x16">
<jdoc:include type="head" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta charset="utf-8" />
<meta name="description" content="" />
<meta name="author" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="#dce0ec" />
	
  <!-- NEU seit 22.04.2023 -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
	
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
<link rel='stylesheet' type='text/css' href='/templates/esz-klapptisch-template_v4/css/style.css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" media="print" href="/templates/esz-klapptisch-template_v4/css/style.css">
	

	</head>

	
	<body>
<nav class="navbar navbar-inverse navbar-fixed-top hidden-lg hidden-md hidden-sm">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle navbar-left" data-toggle="collapse" data-target="#myNavbar"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <!-- <li class="active"><a href="#">Home</a></li> -->
        <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#">Tische<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo JRoute::_('index.php?option=com_content&view=article&id=1');?>">Klapptische rechteckig</a></li>
            <li><a href="<?php echo JUri::base() . "index.php?option=com_content&view=article&id=2"?>">Klapptische rund</a></li>
            <li><a href="<?php echo JUri::base() . "index.php?option=com_content&view=article&id=3"?>">Bistro- & Stehtische</a></li>
            <li><a href="<?php echo JUri::base() . "index.php?option=com_content&view=article&id=4"?>">Tischgarnituren</a></li>
            <li><a href="<?php echo JUri::base() . "index.php?option=com_content&view=article&id=5"?>">ZOWN Produkte</a></li>
          </ul>
        </li>
        <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#">Stühle<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo JUri::base() . "index.php?option=com_content&view=article&id=6"?>">Klappstühle</a></li>
            <li><a href="<?php echo JUri::base() . "index.php?option=com_content&view=article&id=7"?>">Stapelstühle</a></li>
            <li><a href="<?php echo JUri::base() . "index.php?option=com_content&view=article&id=8"?>">Diverse Stühle</a></li>
            <li><a href="<?php echo JUri::base() . "index.php?option=com_content&view=article&id=5"?>">ZOWN Produkte</a></li>
          </ul>
        </li>
        <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#">Zelte<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo JUri::base() . "index.php?option=com_content&view=article&id=10"?>">Systemklappzelte</a></li>
            <li><a href="<?php echo JUri::base() . "index.php?option=com_content&view=article&id=11"?>">Pagodenzelte</a></li>
          </ul>
        </li>
        <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#">Diverses<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo JUri::base() . "index.php?option=com_content&view=article&id=12"?>">Design-Möbel</a></li>
            <li><a href="<?php echo JUri::base() . "index.php?option=com_content&view=article&id=13"?>">Diverses / Zubehör</a></li>
            <li><a href="<?php echo JUri::base() . "index.php?option=com_content&view=article&id=14"?>">Hussen & Tischtücher</a></li>
            <li><a href="<?php echo JUri::base() . "index.php?option=com_content&view=article&id=15"?>">Transportwagen</a></li>
            <li><a href="<?php echo JUri::base() . "index.php?option=com_content&view=article&id=5"?>">ZOWN Produkte</a></li>
          </ul>
        </li>
      
      </ul>
    </div>
  </div>
</nav>
<div id='header'>
  <div id='logo_wrapper'> <a href='/index.php'><img src='/templates/esz-klapptisch-template_v4/img/logo.gif'></a> </div>
  <div id='header_menu'>
    <jdoc:include type="modules" name="topMenuOben"/>
  </div>
</div>
<div id='background'></div>
<div id='shadow'></div>
<div id='content_container'>
  <div id='menu_left'class='hidden-xs'>
    <ul>
      <li><img src='/templates/esz-klapptisch-template_v4/img/font_tische.png' alt='Tische'></li>
      <li><img src='/templates/esz-klapptisch-template_v4/img/font_stuehle.png' alt='Stühle'></li>
      <li><img src='/templates/esz-klapptisch-template_v4/img/font_zelte.png' alt='Zelte'></li>
      <li><img src='/templates/esz-klapptisch-template_v4/img/font_diverses.png' alt='Zubehör'></li>
    </ul>
  </div>
  <div id='wrapper'>
    <div id='radius'>
      <div id='cc'>
        <div id='content'>
       <jdoc:include type="component" />
        </div>
        <div id='infobox' class='hidden-xs'>
          <div id='offer' class='info'><jdoc:include type="modules" name="newsDivKopfzeile" /></div>
          <div id='news' class='info'><jdoc:include type="modules" name="newsDivMitte" /></div>
          <div id='team' class='info'><jdoc:include type="modules" name="team" /></div>
          <div id='contact' class='info'><jdoc:include type="modules" name="newsDivFusszeile" /></div>
        </div>
      </div>
    </div>
    <div id='dropdown_left' class='hidden-xs'></div>
  </div>
</div>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Grossansicht</h4>
      </div>
      <div class="modal-body">
        <img id="popup_image">
      </div>

    </div>

  </div>
</div>

<script src='/templates/esz-klapptisch-template_v4/js/jquery-ui.min.js'></script> 
<script src='/templates/esz-klapptisch-template_v4/js/script.js'></script> 
<script type="text/javascript" src="/templates/esz-klapptisch-template_v4/js/underscore-min.js"></script>
<link rel="stylesheet" type="text/css" href="/templates/esz-klapptisch-template_v4/css/afterBtrap.css">
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-75385216-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
	
	
</html>
