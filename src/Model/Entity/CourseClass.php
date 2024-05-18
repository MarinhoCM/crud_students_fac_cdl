<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CourseClass Entity
 *
 * @property int $id
 * @property int $course_id
 * @property int $teacher_id
 * @property string|null $schedule
 *
 * @property \App\Model\Entity\Course $course
 * @property \App\Model\Entity\Teacher $teacher
 */
class CourseClass extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        '*' => true,
        'id' => false,
        'slug' => false,
        'course_id' => true,
        'teacher_id' => true,
        'schedule' => true,
        'course' => true,
        'teacher' => true,
    ];
}
