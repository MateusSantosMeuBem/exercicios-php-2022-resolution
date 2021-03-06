<?php

namespace Galoa\ExerciciosPhp2022\WebScrapping;

use DOMDocument;

/**
 * Runner for the Webscrapping exercice.
 */
class Main {

  /**
   * Main runner, instantiates a Scrapper and runs.
   */
  public static function run(): void {
    /**
     * Disable the warning
     * 
     */
    libxml_use_internal_errors(true);

    $dom = new DOMDocument('1.0', 'utf-8');
    $dom->loadHTMLFile(__DIR__ . '/../../webscrapping/origin.html');
    $scrapData = (new Scrapper())->scrap($dom);
    (new Writer())->write(...$scrapData);
  }

}
