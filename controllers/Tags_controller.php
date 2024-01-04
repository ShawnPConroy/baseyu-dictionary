<?php
namespace WorldlangDict;

class Tags_controller {
    public static function addTags($config, $request, &$page)
    {
        
        $tags = yaml_parse_file($config->tag_location);
        if (isset($request->arguments[0]) && isset($tags[$request->arguments[0]])) {
            $defs = yaml_parse_file($config->basic_location . "{$config->lang}.yaml");
            $tag = $request->arguments[0];
            $page->setTitle($tag . ' &mdash; ' . $config->getTrans('single tag view'));
            include_once('views/tags_display_view.php');
        } else {
            $defs = yaml_parse_file($config->basic_location . "{$config->lang}.yaml");
            $page->setTitle($config->getTrans('tags title'));
            include_once('views/tags_default_view.php');
        }
    }
}