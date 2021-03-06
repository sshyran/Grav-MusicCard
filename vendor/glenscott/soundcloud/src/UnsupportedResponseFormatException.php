<?php

namespace SoundCloud;

/**
 * Soundcloud unsupported response format exception.
 *
 * @category Services
 * @package Services_Soundcloud
 * @author Anton Lindqvist <anton@qvister.se>
 * @author Glen Scott <glen@glenscott.co.uk>
 * @copyright 2010 Anton Lindqvist <anton@qvister.se>
 * @license http://www.opensource.org/licenses/mit-license.php MIT
 * @link http://github.com/mptre/php-soundcloud
 */
class UnsupportedResponseFormatException extends \Exception
{

    /**
     * Default message.
     *
     * @access protected
     *
     * @var string
     */
    protected $message = 'The given response format is unsupported.';
}
