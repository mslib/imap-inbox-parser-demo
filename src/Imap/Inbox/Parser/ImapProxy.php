<?php
/**
 * This file is part of the ImapInboxParser package.
 *
 * (c) Marco Spallanzani <mslib.code@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Imap\Inbox\Parser;

use Msl\ResourceProxy\Proxy\AbstractProxy;

/**
 * ImapProxy implementation
 *
 * @category  Parser
 * @package   Imap\Inbox\Parser
 * @author    "Marco Spallanzani" <mslib.code@gmail.com>
 */
class ImapProxy extends AbstractProxy
{
    /**
     * String containing the name of this proxy. This value will be used mainly for log purposes
     *
     * @var string
     */
    const PROXY_NAME = "IMAP_PROXY";

    /**
     * Returns the default config array
     *
     * @return mixed
     */
    public function getDefaultConfig()
    {
        return include __DIR__ . '/resources/config/imapproxy.config.php';
    }
} 