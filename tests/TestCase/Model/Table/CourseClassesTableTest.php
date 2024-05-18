<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CourseClassesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CourseClassesTable Test Case
 */
class CourseClassesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CourseClassesTable
     */
    protected $CourseClasses;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.CourseClasses',
        'app.Courses',
        'app.Teachers',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('CourseClasses') ? [] : ['className' => CourseClassesTable::class];
        $this->CourseClasses = $this->getTableLocator()->get('CourseClasses', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->CourseClasses);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CourseClassesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\CourseClassesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
