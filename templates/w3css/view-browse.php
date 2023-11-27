<?php
namespace WorldlangDict;
?>
<!doctype html>
<html lang="">
<? require_once("partials/html-head.php"); ?>
<body id="htmlBody">
  <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

<? require_once($config->templatePath . "partials/page-header.php"); ?>


<main id="content" class="w3-container content-bg">

    <h1><?= $config->getTrans('browse title') ?></h1>

    <div class="w3-card">
        <header class="w3-container">
            <h2><?= $config->getTrans('browse filters header') ?></h2>
        </header>
        <section class="filter alphabet">
            <h3><?= $config->getTrans('browse filter by letter header') ?></h3>
            <div class="">
                <input type="radio" name="letter" id="letter-a" value="a">
                <label for="letter-a" class="">a</label>
                <input type="radio" name="letter" id="letter-b" value="b">
                <label for="letter-b" class="">b</label>
                <input type="radio" name="letter" id="letter-c" value="c">
                <label for="letter-c" class="">c</label>
                <input type="radio" name="letter" id="letter-d" value="d">
                <label for="letter-d" class="">d</label>
                <input type="radio" name="letter" id="letter-e" value="e">
                <label for="letter-e" class="">e</label>
                <input type="radio" name="letter" id="letter-f" value="f">
                <label for="letter-f" class="">f</label>
                <input type="radio" name="letter" id="letter-g" value="g">
                <label for="letter-g" class="">g</label>
                <input type="radio" name="letter" id="letter-h" value="h">
                <label for="letter-h" class="">h</label>
                <input type="radio" name="letter" id="letter-i" value="i">
                <label for="letter-i" class="">i</label>
                <input type="radio" name="letter" id="letter-j" value="j">
                <label for="letter-j" class="">j</label>
                <input type="radio" name="letter" id="letter-k" value="k">
                <label for="letter-k" class="">k</label>
                <input type="radio" name="letter" id="letter-l" value="l">
                <label for="letter-l" class="">l</label>
                <input type="radio" name="letter" id="letter-m" value="m">
                <label for="letter-m" class="">m</label>
                <input type="radio" name="letter" id="letter-n" value="n">
                <label for="letter-n" class="">n</label>
                <input type="radio" name="letter" id="letter-o" value="o">
                <label for="letter-o" class="">o</label>
                <input type="radio" name="letter" id="letter-p" value="p">
                <label for="letter-p" class="">p</label>
                <input type="radio" name="letter" id="letter-r" value="r">
                <label for="letter-r" class="">r</label>
                <input type="radio" name="letter" id="letter-s" value="s">
                <label for="letter-s" class="">s</label>
                <input type="radio" name="letter" id="letter-t" value="t">
                <label for="letter-t" class="">t</label>
                <input type="radio" name="letter" id="letter-u" value="u">
                <label for="letter-u" class="">u</label>
                <input type="radio" name="letter" id="letter-v" value="v">
                <label for="letter-v" class="">v</label>
                <input type="radio" name="letter" id="letter-w" value="w">
                <label for="letter-w" class="">w</label>
                <input type="radio" name="letter" id="letter-x" value="x">
                <label for="letter-x" class="">x</label>
                <input type="radio" name="letter" id="letter-y" value="y">
                <label for="letter-y" class="">y</label>
                <input type="radio" name="letter" id="letter-z" value="z">
                <label for="letter-z" class="">z</label>
                <input type="radio" name="letter" id="letter-all" value="all">
                <label for="letter-all" class="" id="letter-all-label"><?= $config->getTrans('letter all') ?></label>
            </div>
        </section>

        <section class="filter categories">
            <h3 class=""><?= $config->getTrans('browse filter by category header') ?></h3>
            <div>
                <input id="cat-affix" type="radio" name="category" value="affix">
                <label for="cat-affix" class=""><?= $config->getTrans('affix') ?></label>
                <input id="cat-root" type="radio" name="category" value="root">
                <label for="cat-root" class=""><?= $config->getTrans('root') ?></label>
                <input id="cat-proper-noun" type="radio" name="category" value="proper noun">
                <label for="cat-proper-noun" class=""><?= $config->getTrans('proper noun') ?></label>
                <input id="cat-derived" type="radio" name="category" value="derived">
                <label for="cat-derived" class=""><?= $config->getTrans('derived word') ?></label>
                <input id="cat-phrase" type="radio" name="category" value="phrase">
                <label for="cat-phrase" class=""><?= $config->getTrans('phrase') ?></label>
                <input id="cat-all" type="radio" name="category" value="all">
                <label for="cat-all" class=""><?= $config->getTrans('category all') ?></label>
            </div>
        </section>
    </div>


    <?php echo $page->content ?>
</main>

<? require_once($config->templatePath . "partials/page-footer.php"); ?>

</body>

</html>
