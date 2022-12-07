<?php

require_once 'Page.php';
require_once 'Product.php';
require_once 'Renderer.php';

$htmlRenderer = new HTMLRenderer();
$jsonRenderer = new JSONRenderer();
$xmlRenderer = new XMLRenderer();

$htmlSimplePage = new SimplePage($htmlRenderer, 'Home', 'Lorem ipsum.');
$jsonSimplePage = new SimplePage($jsonRenderer, 'Home', 'Lorem ipsum.');
$xmlSimplePage = new SimplePage($xmlRenderer, 'Home', 'Lorem ipsum.');

echo $htmlSimplePage->render() . "\n";
echo $jsonSimplePage->render() . "\n";
echo $xmlSimplePage->render() . "\n";

$product = new Product("Trousers", "So warm", "example.jpg", "0");

$productHTMLPage = new ProductPage($htmlRenderer, $product);
$productJSONPage = new ProductPage($jsonRenderer, $product);
$productXMLPage = new ProductPage($xmlRenderer, $product);

echo $productHTMLPage->render() . "\n";
echo $productJSONPage->render() . "\n";
echo $productXMLPage->render() . "\n";
