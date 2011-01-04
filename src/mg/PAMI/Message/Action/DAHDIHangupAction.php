<?php
/**
 * DAHDIHangup action message.
 *
 * PHP Version 5
 *
 * @category   Pami
 * @package    Message
 * @subpackage Action
 * @author     Marcelo Gornstein <marcelog@gmail.com>
 * @license    http://www.noneyet.ar/ Apache License 2.0
 * @version    SVN: $Id$
 * @link       http://www.noneyet.ar/
 */
namespace PAMI\Message\Action;

/**
 * DAHDIHangup action message.
 *
 * PHP Version 5
 *
 * @category   Pami
 * @package    Message
 * @subpackage Action
 * @author     Marcelo Gornstein <marcelog@gmail.com>
 * @license    http://www.noneyet.ar/ Apache License 2.0
 * @link       http://www.noneyet.ar/
 */
class DAHDIHangupAction extends ActionMessage
{
    /**
     * Constructor.
     *
     * @param string $channel Channel to hangup.
     * 
     * @return void
     */
    public function __construct($channel)
    {
        parent::__construct('DAHDIHangup');
        $this->setKey('DAHDIChannel', $channel);
    }
}