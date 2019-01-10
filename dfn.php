<?php

$wgHooks['ParserBeforeStrip'][] = 'MF2dfn::onParserBeforeStrip';

class MF2dfn {
        public static function onParserBeforeStrip(&$parser, &$text, &$strip_state) {
                static $hasRun = false;
                if($hasRun) return true;

                if(!preg_match('/p-summary/', $text)) {
                        if(preg_match('/.*<dfn>.+<\/dfn>.+?[\.!\?](?=\s|$)/', $text, $match)) {
                                $text = str_replace($match[0], '<span class="p-summary">'.$match[1].'<dfn class="u-iww-thing-defined h-iww-dfn">'.$match[2].'</dfn>'.$match[3].'</span>', $text);
                                $hasRun =  true;
                        }
                }
                return true;
        }
}
