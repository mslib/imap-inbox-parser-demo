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

    /*$source = $imapProxy->getSourceByName('mslib-gmail-account');

    try {
        $imapProxy->processResourcesBySource($source);
        echo 'success' . PHP_EOL;
    } catch (\Msl\ResourceProxy\Exception\PostParseException $ex) {
        echo 'error: ' . $ex->getMessage() . PHP_EOL;
        $errors = $ex->getErrors();
        foreach ($errors as $error) {
            echo $error . PHP_EOL;
        }
    }*/

    try {
        $imapProxy->processResources();
        echo 'success' . PHP_EOL;
    } catch (\Msl\ResourceProxy\Exception\GlobalProcessException $ex) {
        echo 'error: ' . $ex->getMessage() . PHP_EOL;
        $errors = $ex->getErrors();
        foreach ($errors as $error) {
            if (is_string($error)) {
                echo $error . PHP_EOL;
            } else if ($error instanceof \Msl\ResourceProxy\Exception\PostParseException) {
                echo $error->getMessage() . PHP_EOL;
                $postParseErrors = $error->getErrors();
                foreach ($postParseErrors as $postParseError) {
                    echo $postParseError . PHP_EOL;
                }
            }
        }
    }
}

