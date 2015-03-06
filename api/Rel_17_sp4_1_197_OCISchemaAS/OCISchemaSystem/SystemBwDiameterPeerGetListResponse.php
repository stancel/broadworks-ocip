<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Contains a 5 column table with column headings 'Instance', 'Identity', 'IP Address', 'Port', and 'Enabled'. One row is present for each peer.
 */
class SystemBwDiameterPeerGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $peerTable
    ) {
        $this->peerTable = $peerTable;
        $this->args      = func_get_args();
    }

    public function setPeerTable($peerTable)
    {
        $peerTable and $this->peerTable = new core:OCITable($peerTable);
    }

    public function getPeerTable()
    {
        return (!$this->peerTable) ?: $this->peerTable->value();
    }
}