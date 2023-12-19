<?php
namespace WorldlangDict;
?>
<!doctype html>
<html class="no-js" lang="">
<? require_once($config->templatePath ."partials/html-head.php"); ?>
<body id="htmlBody">
  <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

<? require_once($config->templatePath . "partials/page-header.php"); ?>

<main class="tags">

<h1><?= $config->getTrans('tags title') ?></h1>
<dl class="">
<?
foreach ($tags as $tag=>$words):
    $exists = isset($defs[$tag]);
?>
  <div>
    <dt>
        <span><?= WorldlangDictUtils::makeLink($config, "lexilari/".$tag, $request, $tag); ?></span>
        <span class="hl"><?=count($words) ?></span>
    </dt>
    <dd>
        <?= ($exists ? $defs[$tag] : '&nbsp;')  ?>
    </dd>
  </div>
<?php endforeach; ?>
</dl>
</main>

<? require_once($config->templatePath . "partials/page-footer.php"); ?>

</body>

</html>