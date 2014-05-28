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
 * Imap Proxy Configuration file
 *
 * PHP version 5
 *
 * @author "Marco Spallanzani" <mslib.code@gmail.com>
 */

return array(
    'global' => array(
        'output_folder' => __DIR__ . '/../../../../../../output',
    ),
    'sources' => array(
        'mslib-gmail-account' => array( // (REQUIRED) Second Level Action Name
            'type'              => 'imap', // (REQUIRED) the resource type
            'connection'           => array(
                'host'  => 'imap.gmail.com', // (Not required)
                'port'  => '993', // (Not required)
                'ssl'   => 'SSL', // (Not required)
                'username'      => '', // (REQUIRED)
                'password'      => '', // (REQUIRED)
                'filter'        => array( // The filter list could be different for each source type
                    'message_status' => 'unread_only', // FOR IMAP TYPE ONLY
                )
            ),
        ),
        /*'mslib-gmail-account' => array( // (REQUIRED) Second Level Action Name
            'type'              => 'pop', // (REQUIRED) the resource type
            'connection'           => array(
                'host'  => 'pop.gmail.com', // (Not required)
                'port'  => '995', // (Not required)
                'ssl'   => 'SSL', // (Not required)
                'username'      => '', // (REQUIRED)
                'password'      => '', // (REQUIRED)
            ),
        ),*/
    ),
);

