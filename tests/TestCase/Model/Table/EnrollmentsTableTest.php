<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EnrollmentsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EnrollmentsTable Test Case
 */
class EnrollmentsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EnrollmentsTable
     */
    protected $Enrollments;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Enrollments',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Enrollments') ? [] : ['className' => EnrollmentsTable::class];
        $this->Enrollments = $this->getTableLocator()->get('Enrollments', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Enrollments);

        parent::tearDown();
    }

    /**
     * Test beforeSave method
     *
     * @return void
     * @uses \App\Model\Table\EnrollmentsTable::beforeSave()
     */
    public function testBeforeSave(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
