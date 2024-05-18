<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CourseClassesFixture
 */
class CourseClassesFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'course_id' => 1,
                'teacher_id' => 1,
                'schedule' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
