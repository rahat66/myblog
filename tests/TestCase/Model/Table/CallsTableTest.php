<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CallsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CallsTable Test Case
 */
class CallsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CallsTable
     */
    protected $Calls;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Calls',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Calls') ? [] : ['className' => CallsTable::class];
        $this->Calls = $this->getTableLocator()->get('Calls', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Calls);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
