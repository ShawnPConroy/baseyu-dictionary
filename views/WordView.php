<?php
namespace WorldlangDict;

class WordView
{
    public static function dictionaryEntry($config, $request, $word, &$page)
    {
        $page->content .='
            <div id="'.$word->term.'" class="dictionaryEntry w3-card" data-search="'./*implode(' ', $word->searchText).*/'" >
            <header class="w3-container w3-blue">
                <h2 id="entryTerm">'.$word->term.'</h2>
            </header>
            <div class="w3-container">
            <p class="definition">'.$word->translation[$config->lang].'</p>';
        if (!empty($word->etymology)) {
            $page->content .='
                <p class="etymology">'.sprintf($config->getTrans('Etymology'), $word->etymology).'</p>';

        }
        if (!empty($word->relatedWords)) {
            foreach($word->relatedWords as $i=>$cur) {
                $word->relatedWords[$i] = WorldlangDictUtils::makeLink(
                    $config,
                    'leksi/'.$cur,
                    $cur
                );
            }
            $page->content .= '
                <p class="alsosee">'.
                sprintf($config->getTrans(
                    'Also See Sentence'),
                    implode(', ', $word->relatedWords)
                ).'</p>';
        }

        $page->content .= '</div>';
        if (isset($request->options['full'])) {
            $page->content .= '<div style="text-align: left; color: black">';
            foreach ($word->wordSource as $key=>$data) {
                $page->content .= '<p><strong style="color: black">'.$key . '</strong>: '. $data. "</p>";
            }
            $page->content .= '</div>';
        }
        $page->content .=
            '<footer class="w3-container w3-pale-blue">
            '.WorldlangDictUtils::makeLink(
                $config,
                'leksi/'.$word->term,
                '<span class="fa fa-link"></span> '.
                    $config->getTrans('Word Link')
            ).'
            &bull; '.$word->ipaLink.'
            </footer>
            </div>
            ';
    }

    public function addList($config, $request, &$page)
    {
        foreach ($config->dictionary->words as $wordIndex=>$entry) {
            if (is_a($entry, 'WorldlangDict\Word')) {
                if ($list->listLang != "glb") {
                    $page->content .= '<h1>'.
                        sprintf(
                            $config->getTrans('Entry for'),
                            $wordIndex,
                            $list->lang
                        ).'</h1>';
                }
                WordView::DictionaryEntry($config, $request, $entry, $page);
            } else {
                if ($list->listLang != $config->worldlang) {
                    $page->content .= '<h1>'.
                        sprintf(
                            $config->getTrans('Entries for'),
                            $wordIndex,
                            $list->lang
                        ).'</h1>';
                }
                foreach ($entry as $subEntry) {
                    $page->content .= $subEntry->getReverse();
                }
            }
        }
    }
}