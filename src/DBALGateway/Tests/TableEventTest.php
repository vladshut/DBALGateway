<?php
namespace DBALGateway\Tests;

use DBALGateway\Tests\Base\TestsWithFixture;
use DBALGateway\Table\TableEvent;


class TableEventTest extends TestsWithFixture
{
    
    public function testNewTableEvent()
    {
        $table = $this->getMockBuilder('\DBALGateway\Table\TableInterface')->getMock();
        $event = new TableEvent($table);
        
        $this->assertEquals($table,$event->getTable());
        $this->assertInstanceOf('Symfony\Component\EventDispatcher\Event',$event);
        
    }
        
    
}
/* End of Class */