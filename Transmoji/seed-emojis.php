<?php

/**
 * CLI for seeding Emoji database with data scraped from Unicode.org
 *
 * @author Tony Arra
 */

require_once("../vendor/autoload.php");
use Transmoji\Scraper;

$scraper = new Scraper();
echo $scraper->readEmojiData();