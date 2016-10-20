<?php
/**
 * Scrapes unicode.org for Emoji data
 *
 * @author Tony Arra
 */

namespace Transmoji;

use PHPHtmlParser\Dom;

class Scraper
{

    public function __construct()
    {

    }

    /**
     *
     */
    public function readEmojiData()
    {
        $url = 'http://www.unicode.org/emoji/charts/full-emoji-list.html';
        $html = file_get_contents($url);
        $table = $this->getElement($html, 'table');
        $rows = explode("<tr>", $table);
        array_shift($rows);
        array_shift($rows);

        foreach($rows as $row) {
            $row = "<tr>" . $row;
            $rowDom = new Dom;
            $rowDom->load($row);
            $cols = $this->getColumns($rowDom);
        }
    }

    protected function getColumns(Dom $rowDom)
    {
        /** @var Dom\Collection $columnCollection */
        $columnCollection = $rowDom->find('td');
        $cols = $columnCollection->toArray();

        return array_map(function(Dom\HtmlNode $col) {
            return $col->innerHtml();
        }, $cols);
    }

    /**
     * Get HTML element from string by HTML tag
     *
     * @param string $html
     * @param string $tag
     * @return string
     */
    protected function getElement($html, $tag)
    {
        $endtag = '</' . $tag . '>';
        return substr($html, strpos($html, '<' . $tag . '>'), strpos($html, $endtag) + strlen($endtag));
    }

}
