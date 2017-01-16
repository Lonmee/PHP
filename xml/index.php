<?php
/**
 * Created by PhpStorm.
 * User: Lonmee
 * Date: 1/16/2017
 * Time: 8:10 PM
 */

$doc = new DOMDocument();
$doc->load('demo.xml');

$personNode = $doc->createElement('Persion');
$personNode->setAttribute('name', 'lonmee');
$personNode->setAttribute('sex', 'male');

$personNode->appendChild($doc->createElement('head', 600));
$personNode->appendChild($doc->createElement('body', 1000));
$personNode->appendChild($doc->createElement('leg', 1500));

$doc->appendChild($personNode);

$doc->save('demo1.xml');
