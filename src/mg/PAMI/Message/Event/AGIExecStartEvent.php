<?php
/**
 * Event triggered when a received AGI command starts processing.
 *
 * PHP Version 5
 *
 * @category   Pami
 * @package    Message
 * @subpackage Event
 * @author     Brian Smith <wormling@gmail.com>
 * @license    http://marcelog.github.com/PAMI/ Apache License 2.0
 * @version    SVN: $Id$
 * @link       http://marcelog.github.com/PAMI/
 *
 * Copyright 2011 Marcelo Gornstein <marcelog@gmail.com>
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 */
namespace PAMI\Message\Event;

use PAMI\Message\Event\EventMessage;

/**
 * Event triggered when a received AGI command starts processing.
 *
 * PHP Version 5
 *
 * @category   Pami
 * @package    Message
 * @subpackage Event
 * @author     Brian Smith <wormling@gmail.com>
 * @license    http://marcelog.github.com/PAMI/ Apache License 2.0
 * @link       http://marcelog.github.com/PAMI/
 * 
 */
class AGIExecStartEvent extends EventMessage
{
    /**
     * Returns key: 'Privilege'.
     *
     * @return string
     */
    public function getPrivilege()
    {
        return $this->getKey('Privilege');
    }

    /**
     * Returns key: 'Channel'.
     *
     * @return string
     */
    public function getChannel()
    {
        return $this->getKey('Channel');
    }
    
    /**
     * Returns key: 'ChannelState'.
     * 
     * @return string
     */
    public function getChannelState()
    {
        return $this->getKey('ChannelState');
    }

    /**
     * Returns key: 'ChannelStateDesc'.
     * 
     * @return string
     */
    public function getChannelStateDesc()
    {
        return $this->getKey('ChannelStateDesc');
    }
    
    /**
     * Reurns key: 'CallerIdNum'.
     * 
     * @return string
     */
    public function getCallerIDNum()
    {
        return $this->getKey('CallerIDNum');
    }

    /**
     * Reurns key: 'CallerIdName'.
     * 
     * @return string
     */
    public function getCallerIDName()
    {
        return $this->getKey('CallerIDName');
    }
    
    /**
     * Returns key: 'ConnectedLineNum'.
     * 
     * @return string
     */
    public function getConnectedLineNum()
    {
        return $this->getKey('ConnectedLineNum');
    }

    /**
     * Returns key: 'ConnectedLineName'.
     * 
     * @return string
     */
    public function getConnectedLineName()
    {
        return $this->getKey('ConnectedLineName');
    }

    /**
     * Returns key: 'AccountCode'.
     * 
     * @return string
     */
    public function getAccountCode()
    {
        return $this->getKey('AccountCode');
    }
    
    /**
     * Returns key: 'Context'.
     * 
     * @return string
     */
    public function getContext()
    {
        return $this->getKey('Context');
    }
    
    /**
     * Returns key: 'Exten'.
     * 
     * @return string
     */
    public function getExten()
    {
        return $this->getKey('Exten');
    }
    
    /**
     * Returns key: 'Priority'.
     * 
     * @return string
     */
    public function getPriority()
    {
        return $this->getKey('Priority');
    }
    
    /**
     * Returns key: 'Uniqueid'.
     * 
     * @return string
     */
    public function getUniqueid()
    {
        return $this->getKey('Uniqueid');
    }
    
    /**
     * Returns key: 'CommandId'.
     *
     * @return string
     */
    public function getCommandId()
    {
        return $this->getKey('CommandId');
    }

    /**
     * Returns key: 'Command'.
     *
     * @return string
     */
    public function getCommand()
    {
        return $this->getKey('Command');
    }
}