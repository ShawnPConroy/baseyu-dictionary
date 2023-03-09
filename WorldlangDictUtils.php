<?php
namespace WorldlangDict;

class WorldlangDictUtils
{
    public static function makeUri($config, $controller, $request)
    {
        if (is_string($request)) {
            error_log("\n\n-----".date(DATE_ATOM)."\n", 3, "debug.log");
            error_log("\nmakeUri has a request as string.\n", 3, "debug.log");
            error_log("\nrequest:\n".serialize($request)."\n", 3, "debug.log");
            error_log("\nbacktrace:\n".serialize(debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS))."\n", 3, "debug.log");
    
            foreach(debug_backtrace() as $trace) {
                
                error_log("\nfile :".$trace['file']."\n", 3, "debug.log");
                error_log("\nfile :".$trace['class'].$trace['type'].$trace['function'].$trace['line']."\n", 3, "debug.log");
            }
        }
        return $config->siteUri.$config->lang.'/'.$controller.(!is_string($request) ? $request->linkQuery : "");
    }

    public static function changeLangUri($config, $request, $lang)
    {
        if (is_null($request->arguments)) {
            $args = '';
        } elseif (sizeof($request->arguments) == 1) {
            $args = $request->arguments[0];
        } else {
            $args = implode('/', $request->arguments);
        }
        return $config->siteUri.$lang.'/'
            .$request->controller.'/'
            .$args
            .$request->linkQuery;
    }

    public static function redirect($config, $request, $controller="")
    {
        error_log("\n\n-----".date(DATE_ATOM)."\n", 3, "debug.log");
        error_log("\nredirect on request:\n".serialize($request)."\n", 3, "debug.log");
        header('Location: '.WorldlangDictUtils::makeUri($config, $controller, $request));
        die();
    }

    public static function makeLink($config, $controller, $request, $text=null)
    {
        if ($text == null) {
            $text = $controller;
        }
        return '<a href="'.
            WorldlangDictUtils::makeUri($config, $controller, $request).
            '">'.$text.'</a>';
    }
}
