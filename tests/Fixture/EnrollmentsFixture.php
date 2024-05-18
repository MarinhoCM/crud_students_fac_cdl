<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EnrollmentsFixture
 */
class EnrollmentsFixture extends TestFixture
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
                'student_id' => 1,
                'course_id' => 1,
                'enrollment_date' => '2024-05-18',
            ],
        ];
        parent::init();
    }
}
