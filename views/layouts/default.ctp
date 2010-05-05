<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="Content-Language" content="ja" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<meta name="keywords" content="Senchan.jp,php,cakephp,mobile,perl,wassr,Wasatter,Twitter,Senka,Senchan,Android" />
<meta name="author" content="Senchan" />
<meta name="copyright" content="&copy; 2010 Senchan all rights reserved" />
<meta name="description" content="Senchan.jp" />
<title><?= $title_for_layout ?><?if(!empty($title_for_layout)) print" | "; ?>Senchan.jp</title>
<?= $html->css("main") ?>
<?= $html->css("reset") ?>
<?= $javascript->link("jquery") ?>
<?= $javascript->link("menu") ?>
<?= $javascript->link("wordBreak") ?>
</head>
<body>
<div id="wrapper">
  <div id="header">
    <h1>Senchan.jp</h1>
  </div>
  <? if(@$admin){ ?>
  <div id="global_menu">
    <ul>
      <li id="current"><?= $html->link("Top","/",array('title'=>'Top')) ?></li>
      <li><?= $html->link('Blog','/articles/index',array('title'=>'Blog')) ?></li>
      <li><?= $html->link('Wasatter','/wasatter/index',array('title'=>'Wasatter')) ?></li>
      <li><?= $html->link('About','/about/',array('title'=>'About')) ?></li>
      <li><?= $html->link('Link','/links/index',array('title'=>'Link')) ?></li>
      <li><a href="http://byaa.jp/" title="byaa.jp" class="blank">byaa.jp</a></li>
    </ul>
  </div>
  <? } ?>
  <div id="global_menu">
    <ul>
      <li id="current"><?= $html->link("Top","/",array('title'=>'Top')) ?></li>
      <li><?= $html->link('Blog','/articles/index',array('title'=>'Blog')) ?></li>
      <li><?= $html->link('Wasatter','/wasatter/index',array('title'=>'Wasatter')) ?></li>
      <li><?= $html->link('About','/about/',array('title'=>'About')) ?></li>
      <li><?= $html->link('Link','/links/index',array('title'=>'Link')) ?></li>
      <li><a href="http://byaa.jp/" title="byaa.jp" class="blank">byaa.jp</a></li>
    </ul>
  </div>
  <? if($menu) print $this->element("menus/".$name); ?>
  <div id="main_content" <? if(!$menu){?>class="no_menu"<? } ?>>
    <?= $content_for_layout ?>
  </div>
  <div id="footer">
    <p id="copy_right" class="float_margin_bugfix">&copy; 2010 Senchan all rights reserved</p>
    <p id="designed_for">Designed for Safari4,Firefox3.5,InternerExplorer8 and GoogleChrome</p>
  </div>
</div>
</body>
</html>
