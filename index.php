<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL | E_STRICT);


require 'vendor/autoload.php';

use AntoineAugusti\Books\Fetcher;
use GuzzleHttp\Client;

$client = new Client(['base_uri' => 'https://www.googleapis.com/books/v1/']);
$fetcher = new Fetcher($client);
$book = $fetcher->forISBN($argv[1]);
echo("Title: ".$book->title."\n");
echo("SubTitle: ".$book->subtitle."\n");
echo("Authors: ".$book->authors[0]."\n");
echo("Print Type: ".$book->printType."\n");
echo("Page Count: ".$book->pageCount."\n");
echo("Thumbnail: ".$book->thumbnail."\n");
echo("Language: ".$book->language."\n");
echo("Categories: ".$book->categories[0]."\n");
// var_dump($book);
