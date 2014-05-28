<?php
/**
 * This file is part of the ImapInboxParser package.
 *
 * (c) Marco Spallanzani <mslib.code@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * App bootstrap file
 *
 * PHP version 5
 *
 * @author "Marco Spallanzani" <mslib.code@gmail.com>
 */
namespace {

    $loader = require __DIR__.'/vendor/autoload.php';

    $imapProxy = new \Imap\Inbox\Parser\ImapProxy();

    $source = $imapProxy->getSourceByName('mslib-gmail-account');

    try {
        $imapProxy->processResourcesBySource($source);
        echo 'success';
    } catch (\Msl\ResourceProxy\Exception\PostParseUnitException $ex) {
        echo 'error: ' . $ex->getMessage();
    }
}

