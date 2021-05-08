<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AchievementsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AchievementsTable Test Case
 */
class AchievementsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AchievementsTable
     */
    protected $Achievements;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Achievements',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Achievements') ? [] : ['className' => AchievementsTable::class];
        $this->Achievements = $this->getTableLocator()->get('Achievements', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Achievements);

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
